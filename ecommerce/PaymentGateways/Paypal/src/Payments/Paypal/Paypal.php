<?php

namespace Ollyo\PaymentHub\Payments\Paypal;

use Throwable;
use ErrorException;
use GuzzleHttp\Client;
use Ollyo\PaymentHub\Core\Support\Arr;
use Ollyo\PaymentHub\Core\Support\Uri;
use Ollyo\PaymentHub\Core\Support\Path;
use Ollyo\PaymentHub\Core\Support\System;
use GuzzleHttp\Exception\RequestException;
use Ollyo\PaymentHub\Core\Payment\BasePayment;
use Ollyo\PaymentHub\Contracts\Config\RepositoryContract;



class Paypal extends BasePayment
{
	/**
	 * The Paypal config Repository instance
	 *
	 * @var   RepositoryContract
     * @since 1.0.0
	 */
	protected $config;

    /**
     * @var string|null $orderID
     * This property stores the ID of the current order being processed.
     * @since 1.0.0
     */
    protected $orderID;

    /**
     * @var string|null $accessToken
     * This property holds the access token required for authenticating API requests.
     * @since 1.0.0
     */
    protected $accessToken;

    /**
     * @var object|null $previousPayload
     * This property contains the payload from a previous transaction, used in recurring payments.
     */
    protected $previousPayload;

    /**
     * Checks if all required configuration keys are present and not empty.
     *
     * This method ensures that the necessary configuration settings are available
     * and properly set up before proceeding with any operations that depend on them.
     *
     * @return bool Returns true if all required configuration keys are present and not empty, otherwise false.
     * @since  1.0.0
     */
    public function check(): bool
    {
        $configKeys = Arr::make(['client_id','client_secret','merchant_email','success_url','cancel_url']);

        $isConfigOk = $configKeys->every(function($key){
            return $this->config->has($key) && !empty($this->config->get($key));
        });

        return $isConfigOk;
    }

    public function setup(): void
    {
        
    }

    /**
     * Sets the data for processing after preparing it.
     *
     * This method overrides the setData method in the parent class,
     * ensuring that the data is first prepared before setting it.
     * If an error occurs during data preparation, it is re-thrown.
     *
     * @param  mixed     $data The data to be set.
     * @throws Throwable       If an error occurs during data preparation, it is re-thrown.
     * @since  1.0.0
     */
    public function setData($data): void
    {
        try {
            parent::setData($this->prepareData($data));
        } catch (Throwable $error) {
            throw $error;
        }
    }

    /**
     * Prepares the data for sending to `Paypal Server`.
     *
     * This method takes raw data, processes it to create structured purchase unit data
     * including amount, shipping information, and payment preferences. It uses configuration
     * settings and ensures essential fields are set correctly.
     *
     * @param  mixed $data The raw data to be processed.
     * @return array       The structured data for sending to `Paypal Server`.
     * @since  1.0.0
     */
    public function prepareData($data)
    {
        if (empty($data)) {
            return [];
        }

        $data          = Arr::make((array) $data);
        $this->orderID = $data['order_id'];
        $type          = $data['type'] ?? 'one-time';
        $items         = $type === 'one-time' ? static::getItems($data) : null;
        $amount        = $type === 'one-time' ? $this->createAmountData($data) : $this->createAmountForRecurring($data);

        $returnData = [
            'purchase_units' => [
                [
                    'custom_id' => $data['order_id'],
                    'items'     => $items,
                    'amount'    => $amount,
                    'payee'     => ['email_address' => $this->config->get('merchant_email')]
                ]
            ],
            'intent'         => 'CAPTURE'
        ];

        if ($type === 'one-time') {
            $this->getPaymentSourceForOneTime($returnData);
            
        } elseif ($type === 'recurring') {
            
            $this->previousPayload  = json_decode($data['previous_payload']);

            $this->getPaymentSourceForRecurring($returnData);
        }

        if ($data->has('shipping_address') && !empty($data['shipping_address'])) {
            $returnData['purchase_units'][0]['shipping'] = $this->getShippingInfo($data['shipping_address']);
        }
        
        return $returnData;
    }

    /**
     * Initiates the payment creation process.
     *
     * This method retrieves an access token and use the token to return a checkout URL.
     * If an error occurs during these operations, it handles the error and throws an exception.
     *
     * @throws ErrorException If there is an error retrieving the checkout URL or handling the response.
     * @since  1.0.0
     */
    public function createPayment()
    {
        try {
            
            $orderDetails   = $this->createOrder();
            $checkoutUrl    = isset($orderDetails->links) ? $this->getUrl($orderDetails->links, 'payer-action') : null;

            if (is_null($checkoutUrl)) {
                throw new ErrorException("Checkout Link is Invalid");
            }

            header("Location: {$checkoutUrl}");            
        } catch (RequestException $error) {
            
            $errorMessage = $this->handleErrorResponse($error) ?? $error->getMessage();
            throw new ErrorException($errorMessage);
        }
    }

    /**
     * Creates the amount data array for a payment request.
     *
     * This method constructs and returns an array containing the currency code, total price, and item breakdown
     * for a payment request. It also includes optional fields for shipping, tax, and discount if they are present in the input data.
     *
     * @param  Arr   $data The input data containing the currency, total price, subtotal, and optional fields.
     * @return array       The formatted amount data including currency code, total price, and breakdown.
     * @since  1.0.0
     */
    private function createAmountData(Arr $data)
    {
        $returnData = [
            'currency_code' => $data['currency']->code,
            'value'         => (string) $data['total_price']
        ];

        Arr::make([
            'shipping_charge' => 'shipping',
            'tax'             => 'tax_total',
            'coupon_discount' => 'discount',
            'subtotal'        => 'item_total'
        ])->every(function($value, $key) use ($data, &$returnData) {
            
                if ($data->has($key)) {
                    
                    $returnData['breakdown'][$value] = [
                        'currency_code' => $data['currency']->code,
                        'value'         => (string) $data[$key]
                    ];
                }
            
                return true;
            });

        return $returnData;
    }

    /**
     * Creates the shipping information array for a payment request.
     *
     * This method constructs and returns an array containing the shipping type, receiver's full name,
     * and address for a payment request.
     *
     * @param  object  $data The input data containing the receiver's name and address.
     * @return array        The formatted shipping information including type, name, and address.
     * @since  1.0.0
     */
    private function getShippingInfo($shipping)
    {        
        [$address1, $address2] = System::splitAddress($shipping, 300);

        return [
            'type'      => 'SHIPPING',
            'name'      => ['full_name' => $shipping->name],
            'address'   => [
                'address_line_1'    => $address1,
                'address_line_2'    => $address2,
                'admin_area_2'      => $shipping->city,
                'admin_area_1'      => $shipping->region,
                'postal_code'       => $shipping->postal_code,
                'country_code'      => $shipping->country->alpha_2
            ]
        ];
    }

    /**
     * Retrieves an access token from the OAuth2 token endpoint.
     *
     * This method constructs and sends a POST request to the OAuth2 token endpoint using
     * client credentials to obtain an access token. The access token is then returned in the format
     * "token_type access_token".
     *
     * @return string The access token in the format "token_type access_token".
     * @since  1.0.0
     */
    protected function getAccessToken() : string
    {
        if (empty($this->accessToken)) {
            
            $requestData = (object) [
                'method'    => 'post',
                'url'       => $this->config->get('api_url') . '/v1/oauth2/token',
                'options'   => [
                    'auth'          => [$this->config->get('client_id'), $this->config->get('client_secret')],
                    'headers'       => ["Content-Type" => "application/x-www-form-urlencoded"],
                    'form_params'   => ['grant_type' => 'client_credentials'],
                ],
            ];

            $response = $this->sendHttpRequest($requestData);

            if ($response->token_type && $response->access_token) {
                $this->accessToken = "{$response->token_type}  {$response->access_token}";
            }
        }

        return $this->accessToken;
    }


    /**
     * Creates a new PayPal order by sending a POST request to the PayPal API.
     *
     * @return object The response from the PayPal API, decoded from JSON.
     * @since  1.0.0
     */
    protected function createOrder() : object
    {
        $headers = [
            'Content-Type'      => 'application/json',
            'Authorization'     => $this->getAccessToken(),
            'PayPal-Request-Id' => "order-id-" . $this->orderID,
        ];

        $requestData = (object)[
            'method'  => 'post',
            'url'     => $this->config->get('api_url') . '/v2/checkout/orders',
            'options' => [
                'headers' => $headers,
                'body'    => json_encode($this->getData())
            ]
        ];

        return $this->sendHttpRequest($requestData);
    }

    /**
     * Verifies the webhook signature and processes the order data.
     *
     * This method verifies the webhook signature from the payload. If the signature is valid,
     * it processes the approved order. In case of an error, it handles the error
     * response and sets the return data accordingly.
     *
     * @param  object $payload  The payload object containing the webhook data.
     * @return object           Returns the processed order data or an error response.
     * @throws RequestException if the request fails.
     * @since  1.0.0
     */
    public function verifyAndCreateOrderData(object $payload): object
    {
        try {   
             
            if ($payload->server['REQUEST_METHOD'] === 'GET' && static::checkQueryParams($payload->get)) {
                
                $paymentData               = static::verifyPaymentAuthentication($payload->get);
                $paymentData->encodedData  = $payload->get['encodedData'];
                return $this->processApprovedOrder($paymentData);
                
            } elseif ($payload->server['REQUEST_METHOD'] === 'POST' && !empty($payload->stream)) {
                
                $paymentData = json_decode($payload->stream);

                if($paymentData->payment_type === 'recurring') {
                    return $this->setReturnData($paymentData);
                }
            }
 
            exit();
        } catch (RequestException $error) {
            
            // Handle the error response
            $errorMessage = $this->handleErrorResponse($error) ?? $error->getMessage();
            return $this->setReturnData($paymentData, $errorMessage);
        }
    }

    /**
     * Captures a payment for an authorized PayPal order.
     *
     * This method constructs the capture payment URL and headers, including the access token,
     * PayPal request ID. It then sends a POST request to the capture payment URL using the specified headers.
     *
     * @param  object           $payloadStream  The payload stream sent from Paypal Webhook Notification.
     * @return object                           The response object from the capture payment request.
     * @throws ErrorException                   If the payment capture is incomplete or the order status is not completed.
     * @since  1.0.0
     */
    private function capturePayment($payloadStream)
    {
        
        $capturePaymentUrl = $this->getUrl($payloadStream->links, 'capture');

        $headers = [
            'Content-Type'      => 'application/json',
            'Authorization'     => $this->getAccessToken(),
            'PayPal-Request-Id' => "paypal-order-id-{$payloadStream->id}",
            'Prefer'            => 'return=representation',            
        ];

        $requestData = (object)[
            'method'  => 'post',
            'url'     => $capturePaymentUrl,
            'options' => ['headers' =>  $headers]
        ];    

        $responseData = $this->sendHttpRequest($requestData);

        if (!static::isOrderCompleted($responseData)) {
            throw new ErrorException(sprintf("The Payment Capture Is Incomplete. Order Status: %s", $responseData->status));           
        }

        if (isset($_GET['ba_token'])) {
            $responseData->payment_source->paypal->billing_agreement_id = $_GET['ba_token'];
        }
        
        $responseData->encodedData = $payloadStream->encodedData ?? null;

        return $responseData;
    }

    /**
     * Retrieves the URL from an array of links that matches a specified condition.
     *
     * This method filters the provided links array to find the link that matches the given
     * condition. If a matching link is found, it returns the href property of that link.
     *
     * @param  array        $links     The array of links to search through.
     * @param  string       $condition The condition to match against the rel property of the links.
     * @return string|null             The URL if a matching link is found, otherwise null.
     * @since  1.0.0
     */
    private function getUrl($links,$condition)
    {
        $url = array_filter($links, function ($link) use ($condition) {
            return $link->rel === $condition;
        });

        return $url ? reset($url)->href : null;
    }

    /**
     * Processes an approved PayPal order and captures the payment.
     *
     * This method checks if the order is approved by calling the `isOrderApproved` method.
     * If the order is approved, it captures the payment using the capturePayment method,
     * and sets the return data using the setReturnData method.
     *
     * @param  object   $payload   The payload containing the payment data.
     * @return object              The return data object if the order is approved, otherwise null.
     * @since  1.0.0
     */
    private function processApprovedOrder($payload)
    {   
        if (!static::isOrderApproved($payload)) {
            throw new ErrorException(sprintf("The Payment Order is not Approved. Order Status: %s", $payload->status));
        }

        return $this->setReturnData($this->capturePayment($payload));
    }

    /**
     * Handles the error response from an HTTP request and formats a user-friendly error message.
     *
     * This method extracts error details from the response body and constructs a comprehensive
     * error message. It processes different parts of the error response, including issues,
     * details, and general error messages, and combines them into a single message string.
     *
     * @param  RequestException $errorResponse The error response from the HTTP request.
     * @return string                          The formatted error message.
     * @since  1.0.0
     */
    private function handleErrorResponse($errorResponse)
    {
        $message   = '';

        if (!is_null($errorResponse->getResponse())) {
            
            $errorBody = json_decode($errorResponse->getResponse()->getBody());

            if (!empty($errorBody->issues)) {
                $message .= $this->processIssues($errorBody->issues);
            }

            if (!empty($errorBody->details)) {
                $message .= $this->processIssues($errorBody->details);
            }

            if (!empty($errorBody->error) && !empty($errorBody->error_description)) {
                $message .= "{$errorBody->error} : {$errorBody->error_description}. ";
            }

            if (!empty($errorBody->message)) {
                $message .= "{$errorBody->name} : {$errorBody->message}. ";
            }

            return $message;
        }

        return null;
    }

    /**
     * Processes a list of issues from an error response and formats them into a single message string.
     *
     * This method iterates over the provided issues, extracting relevant information such as
     * the issue type, description, and associated fields. It constructs a detailed message string
     * containing all the extracted information.
     *
     * @param  array  $issues The list of issues from the error response.
     * @return string         The formatted message string containing details of all issues.
     * @since  1.0.0
     */
    private function processIssues($issues)
    {
        $finalMessage = array_reduce($issues, function ($message, $issue) {
            
            if (!empty($issue->issue)) {
                $message .= "Issue: {$issue->issue}. ";
            }

            if (!empty($issue->description)) {
                $message .= "Description: {$issue->description}. ";
            }

            if (!empty($issue->fields)) {
                foreach ($issue->fields as $field) {
                    if (!empty($field->field)) {
                        $message .= "Field: {$field->field}. ";
                    }
                }
            }

            return $message;
        }, '');

        return $finalMessage;
    }

    /**
     * Sets and returns order data based on the processing result and error message.
     *
     * Constructs order data based on the provided payload stream and optionally an error message.
     * If an error message is provided, sets the order data with failure status and error details.
     * Otherwise, sets the order data with successful transaction details from the payload stream.
     *
     * @param  object      $payloadStream The payload stream object containing order and payment details.
     * @param  string|null $errorMessage  Optional. Error message to indicate payment failure reason.
     * @return object                     The constructed order data object.
     * @since  1.0.0
     */
    private function setReturnData($payloadStream, $errorMessage = null) : object
    {
        $returnData = System::defaultOrderData();

        $statusMap = [
            'DECLINED'  => 'failed',
            'COMPLETED' => 'paid',
            'PENDING'   => 'pending',
        ];

        $paymentType = $payloadStream->payment_type ?? 'one-time';
        
        // Set Redirect Url if it is `one-time` payment.
        if (!is_null($payloadStream->encodedData) && $paymentType === 'one-time') {
            
            $decodedData                = json_decode(base64_decode($payloadStream->encodedData));        
            $returnData->redirectUrl    = $errorMessage ? $decodedData->cancel_url : $decodedData->success_url;
        }

        if ($errorMessage) {          
            $returnData->id                   = $payloadStream->purchase_units[0]->custom_id;
            $returnData->payment_status       = 'failed';
            $returnData->payment_error_reason = $errorMessage;
           
        } else {        
            $transactionInfo             = $payloadStream->purchase_units[0]->payments->captures[0];
            $returnData->id              = $transactionInfo->custom_id;
            $returnData->payment_status  = $statusMap[$transactionInfo->status];
            $returnData->transaction_id  = $transactionInfo->id;
        }

        $returnData->payment_payload = json_encode($payloadStream);
        $returnData->payment_method  = $this->config->get('name');

        return $returnData;
    }

    /**
     * Checks if the order in the payload stream is approved for capture.
     *
     * Determines if the event type is `CHECKOUT.ORDER.APPROVED`, intent is `CAPTURE`,
     * and status is `APPROVED` in the provided payload stream.
     *
     * @param  object $payloadStream    The payload stream object containing payment details.
     * @return bool                     Returns true if the order is approved for capture, false otherwise.
     * @since  1.0.0
     */
    private function isOrderApproved($payloadStream) : bool
    {
        return $payloadStream->intent === 'CAPTURE' && $payloadStream->status === 'APPROVED';
    }

    /**
     * Sends an HTTP request using the specified method and options.
     *
     * @param   object      $requestData    An object containing the request method, URL, and options (e.g., headers, body).
     * @param   bool        $return         (optional) Determines whether to return the response data or exit after the 
     * request.
     * @return  object|null                 The decoded JSON response body if $return is true, otherwise null.
     * @since   1.0.0
     */
    private function sendHttpRequest($requestData, $return = true)
    {
        $http       = new Client();
        $method     = $requestData->method;
        $requestUrl = $requestData->url;
        $response   = $http->$method($requestUrl, $requestData->options);

        if ($return) {
            return json_decode($response->getBody());
        }

        exit();
    }

    /**
     * Retrieves and formats items from the provided data.
     *
     * @param  object $data The data object containing item details.
     * @return array        An array of formatted items.
     * @since  1.0.0
     */
    private function getItems($data) : array
    {
        $currency = $data['currency']->code;

        return array_map(function($item) use ($currency) {

            $price = $item['discounted_price'] > 0 ? $item['discounted_price'] : $item['regular_price'];
            
            return [
                'name'          => $item['item_name'],
                'quantity'      => (string) $item['quantity'],
                'image_url'     => isset($item['image']) && $item['image'] ? Path::clean($item['image']) : null,
                'unit_amount'   => [
                    'currency_code' => $currency,
                    'value'         => (string) $price
                ]
            ];
        }, (array) $data['items']);
    }


    /**
     * Creates a recurring payment by generating an order and handling the payment details.
     *
     * @throws ErrorException If there is an error during the payment process or request handling.
     * @since  1.0.0
     */
    public function createRecurringPayment()
    {
        try {
            
            $responseData = $this->createOrder();

            if ($responseData->status === 'COMPLETED') {
               $responseData->payment_source->paypal->attributes = (object)[
                    'vault'                 => (object)[
                        'id' => $this->previousPayload->payment_source->paypal->attributes->vault->id
                    ],
                    'billing_agreement_id'  => $this->previousPayload->payment_source->paypal->billing_agreement_id                  
                ];

                $responseData->payment_type = 'recurring';

                $headers        = ['Content-Type' => 'application/json'];
                $requestData    = (object) [
                    'method'    => 'post',
                    'url'       => $this->config->get('webhook_url'),
                    'options'   => ['headers' => $headers, 'body' => json_encode($responseData)],
                ];

                $this->sendHttpRequest($requestData, false);
            } 

        } catch (RequestException $error) {

            $errorMessage = $this->handleErrorResponse($error) ?? $error->getMessage();
            throw new ErrorException($errorMessage);
        }
    }


    /**
     * Checks if the required query parameters are present and valid.
     *
     * @param  array $params    The query parameters to check.
     * @return bool             True if params are present and non-empty, false otherwise.
     * @since  1.0.0
     */
    private function checkQueryParams($params) : bool
    {
        return $params['token'] && $params['PayerID'] && $params['encodedData'];
    }


    /**
     * Verifies payment authentication by retrieving order details from the PayPal API.
     *
     * @param   array $payload  The payload for the order.
     * @return  object          The response data from the PayPal API, containing order details.
     * @since   1.0.0
     */
    private function verifyPaymentAuthentication($payload) : object
    {         
        $headers = [
            'Content-Type'  => 'application/json',
            'Authorization' => $this->getAccessToken(),
        ];

        $orderID            = $payload['token'];
        $getOrderDetailsUrl = $this->config->get('api_url') . "/v2/checkout/orders/{$orderID}";

        $requestData = (object) [
            'method'    => 'get',
            'url'       => $getOrderDetailsUrl,
            'options'   => ['headers' => $headers],
        ];

        return $this->sendHttpRequest($requestData);  
    }

    /**
     * Retrieves details of a payment vault from the PayPal API using a vault ID.
     *
     * @param  string            $vaultID   The ID of the payment vault to retrieve details for.
     * @return object                       The response data from the PayPal API, containing vault details.
     * @throws ErrorException               If an error occurs while handling the request.
     * @since  1.0.0
     */
    private function getVaultDetails($vaultID) {
        
        try {
            $headers = [
                'Content-Type'  => 'application/json',
                'Authorization' => $this->getAccessToken()
            ];

            $url = $this->config->get('api_url') . '/v3/vault/payment-tokens/' . $vaultID;

            $requestData = (object) [
                'method'    => 'get',
                'url'       => $url,
                'options'   => ['headers' => $headers],
            ];

            return $this->sendHttpRequest($requestData);

        } catch (RequestException $error) {
           $errorMessage = $this->handleErrorResponse($error) ?? $error->getMessage();
           throw new ErrorException($errorMessage);
        }
    }

    /**
     * Configures the payment source for one-time payments.
     *
     * @param  array $returnData Reference to the data array to be modified with payment source details.
     * @return void
     * @since  1.0.0
     */
    private function getPaymentSourceForOneTime(&$returnData) : void
    {
        $returnData['payment_source']['paypal'] = [

            'experience_context' => [
                'user_action'               => 'PAY_NOW',
                'payment_method_preference' => 'UNRESTRICTED',
                'return_url'                => $this->updateWebhookUrl(),
                'cancel_url'                => $this->config->get('cancel_url'),
            ]
        ];

        if ($this->config->get('save_payment_method')) {
            $returnData['payment_source']['paypal']['attributes']['vault'] = [

                'store_in_vault'    => 'ON_SUCCESS',
                'usage_type'        => 'MERCHANT',
            ];
        }
    }

    /**
     * Configures the payment source for recurring payments.
     *
     * @param  array $returnData Reference to the data array to be modified with payment source details.
     * @return void
     * @since  1.0.0
     */
    private function getPaymentSourceForRecurring(&$returnData) : void
    {
        $vaultID        = $this->previousPayload->payment_source->paypal->attributes->vault->id;
        $vaultDetails   = static::getVaultDetails($vaultID);

        if ($vaultDetails && is_object($vaultDetails)) {

            $paymentSource = $vaultDetails->payment_source->paypal;

            $returnData['payment_source'] = [
                'paypal' => [
                    'attributes' => [
                        'customer' => [
                            'id' => $vaultDetails->customer->id,
                        ],
                    ],

                    'vault_id'      => $vaultDetails->id,
                    'email_address' => $paymentSource->email_address,
                    'name'          => [
                        'given_name'    => $paymentSource->name->given_name,
                        'surname'       => $paymentSource->name->surname,
                    ],
                    'experience_context' => [
                        'payment_method_preference' => 'IMMEDIATE_PAYMENT_REQUIRED',
                    ],
                    'address' => [
                         "address_line_1"   => $paymentSource->shipping->address->address_line_1,
                        "address_line_2"    => $paymentSource->shipping->address->address_line_2,
                        "admin_area_2"      => $paymentSource->shipping->address->admin_area_2,
                        "admin_area_1"      => $paymentSource->shipping->address->admin_area_1,
                        "postal_code"       => $paymentSource->shipping->address->postal_code,
                        'country_code'      => $paymentSource->shipping->address->country_code,
                    ]
                ]
            ];
        }
    }

    /**
     * Checks if the order is completed based on the payload stream.
     *
     * @param  object $payloadStream    The payload stream containing order details.
     * @return bool                     Returns true if the order is completed, otherwise false.
     * @since  1.0.0
     */

    private function isOrderCompleted($payloadStream) : bool
    {
        return $payloadStream->intent === 'CAPTURE' && $payloadStream->status === 'COMPLETED';
    }

    /**
     * Creates an amount array for recurring payments.
     *
     * @param  Arr   $data  The data array containing currency and amount information.
     * @return array        Returns an array with currency code and amount value.
     * @since  1.0.0
     */
    private function createAmountForRecurring(Arr $data) : array
    {
        return [
            'currency_code' => $data['currency']->code,
            'value'         => (string) $data['amount'],
        ];
    }

    /**
     * Updates the webhook URL by appending encoded success and cancel URLs as a query parameter.
     *
     * @return string The updated webhook URL with the encoded data appended.
     * @since  1.0.0
     */
    private function updateWebhookUrl() : string
    {
        $encodedUrlData = base64_encode(json_encode([
            'success_url'   => $this->config->get('success_url'), 
            'cancel_url'    => $this->config->get('cancel_url')]
        ));
        
        $webhookUrl = Uri::getInstance($this->config->get('webhook_url'));
        $webhookUrl->setVar('encodedData', $encodedUrlData);

        return $webhookUrl->__toString();
    }
}