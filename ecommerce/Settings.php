<?php
/**
 * Settings class for configuring ecommerce settings
 *
 * @package Tutor\Ecommerce
 * @author Themeum
 * @link https://themeum.com
 * @since 3.0.0
 */

namespace Tutor\Ecommerce;

/**
 * Configure ecommerce settings
 */
class Settings {

	/**
	 * Register hooks
	 */
	public function __construct() {
		add_filter( 'tutor/options/extend/attr', array( __CLASS__, 'add_ecommerce_settings' ) );
	}

	/**
	 * Add ecommerce settings
	 *
	 * @param array $fields Tutor setting fields.
	 *
	 * @return array
	 */
	public static function add_ecommerce_settings( $fields ) {
		$pages = tutor_utils()->get_pages();

		$arr = array(
			'ecommerce_basic'    => array(
				'label'    => __( 'Basic', 'tutor' ),
				'slug'     => 'ecommerce_basic',
				'desc'     => __( 'Advanced Settings', 'tutor' ),
				'template' => 'basic',
				'icon'     => 'tutor-icon-filter',
				'blocks'   => array(
					array(
						'label'      => false,
						'block_type' => 'uniform',
						'slug'       => 'cart_page',
						'fields'     => array(
							array(
								'key'     => CartController::PAGE_ID_OPTION_NAME,
								'type'    => 'select',
								'label'   => __( 'Cart Page', 'tutor' ),
								'default' => '0',
								'options' => $pages,
								'desc'    => __( 'Select the page to be used as the cart page.', 'tutor' ),
							),
						),
					),
					array(
						'label'      => false,
						'block_type' => 'uniform',
						'slug'       => 'checkout_page',
						'fields'     => array(
							array(
								'key'     => CheckoutController::PAGE_ID_OPTION_NAME,
								'type'    => 'select',
								'label'   => __( 'Checkout Page', 'tutor' ),
								'default' => '0',
								'options' => $pages,
								'desc'    => __( 'Select the page to be used as the checkout page.', 'tutor' ),
							),
						),
					),
					array(
						'label'      => __( 'Currency', 'tutor' ),
						'slug'       => 'currency',
						'block_type' => 'uniform',
						'fields'     => array(
							array(
								'key'            => OptionKeys::CURRENCY_TYPE,
								'type'           => 'select',
								'label'          => __( 'Currency', 'tutor' ),
								'select_options' => true,
								'options'        => array(
									'USD' => 'USD Dollar',
									'ER'  => 'Euro',
								),
								'default'        => 'USD',
								'desc'           => __( 'Choose the currency for transactions.', 'tutor' ),
							),
							array(
								'key'            => OptionKeys::CURRENCY_POSITION,
								'type'           => 'select',
								'label'          => __( 'Currency Position', 'tutor' ),
								'select_options' => true,
								'options'        => array(
									'left'  => 'Left',
									'right' => 'Right',
								),
								'default'        => 'left',
								'desc'           => __( 'Set the position of the currency symbol.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::THOUSAND_SEPARATOR,
								'type'    => 'text',
								'label'   => __( 'Thousand Separator', 'tutor' ),
								'default' => ',',
								'desc'    => __( 'Specify the thousand separator.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::DECIMAL_SEPARATOR,
								'type'    => 'text',
								'label'   => __( 'Decimal Separator', 'tutor' ),
								'default' => '.',
								'desc'    => __( 'Specify the decimal separator.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::NUMBER_OF_DECIMALS,
								'type'    => 'number',
								'label'   => __( 'Number of Decimals', 'tutor' ),
								'default' => '2',
								'desc'    => __( 'Set the number of decimal places.', 'tutor' ),
							),
						),
					),

				),
			),
			'ecommerce_payment'  => array(
				'label'    => __( 'Payment', 'tutor' ),
				'slug'     => 'payment_method',
				'desc'     => __( 'Advanced Settings', 'tutor' ),
				'template' => 'basic',
				'icon'     => 'tutor-icon-filter',
				'blocks'   => array(
					array(
						'label'      => __( 'Supported payment methods ', 'tutor' ),
						'slug'       => 'automate_payment_gateway',
						'block_type' => 'uniform',
						'fields'     => Ecommerce::get_automate_payment_setting_fields(),
					),
					array(
						'label'      => __( 'Manual payment methods ', 'tutor' ),
						'slug'       => 'manual_payment_gateway',
						'block_type' => 'uniform',
						'fields'     => Ecommerce::get_manual_payment_setting_fields(),
					),
				),
			),
			'ecommerce_tax'      => array(
				'label'    => __( 'Tax', 'tutor' ),
				'slug'     => 'ecommerce_tax',
				'desc'     => __( 'Advanced Settings', 'tutor' ),
				'template' => 'basic',
				'icon'     => 'tutor-icon-filter',
				'blocks'   => array(
					array(
						'label'      => __( 'Tax Configuration', 'tutor' ),
						'slug'       => 'options',
						'block_type' => 'uniform',
						'fields'     => array(),
					),
				),
			),
			'ecommerce_checkout' => array(
				'label'    => __( 'Checkout', 'tutor' ),
				'slug'     => 'ecommerce_checkout',
				'template' => 'basic',
				'icon'     => 'tutor-icon-filter',
				'blocks'   => array(
					array(
						'label'      => __( 'Checkout Configuration', 'tutor' ),
						'desc'       => __( 'Customize your checkout process to suit your preferences.', 'tutor' ),
						'slug'       => 'checkout_configuration',
						'block_type' => 'uniform',
						'fields'     => array(
							array(
								'key'     => OptionKeys::BILLING_ADDRESS,
								'type'    => 'select',
								'label'   => __( 'Billing Address', 'tutor' ),
								'default' => OptionKeys::get_billing_field_options()['optional'],
								'options' => OptionKeys::get_billing_field_options(),
							),
							array(
								'key'     => OptionKeys::BILLING_PHONE_NUMBER,
								'type'    => 'select',
								'label'   => __( 'Phone Number', 'tutor' ),
								'default' => OptionKeys::get_billing_field_options()['optional'],
								'options' => OptionKeys::get_billing_field_options(),
								'desc'    => __( 'Choose the page for instructor registration.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::BILLING_EMAIL,
								'type'    => 'select',
								'label'   => __( 'Email Address', 'tutor' ),
								'default' => OptionKeys::get_billing_field_options()['optional'],
								'options' => OptionKeys::get_billing_field_options(),
								'desc'    => __( 'Choose the page for student registration.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::IS_TAX_APPLICABLE,
								'type'    => 'toggle_switch',
								'label'   => __( 'Apply Tax Rate', 'tutor' ),
								'default' => 'off',
								'desc'    => __( 'Enable this to accept payments via PayPal.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::IS_COUPON_APPLICABLE,
								'type'    => 'toggle_switch',
								'label'   => __( 'Apply Coupon Code', 'tutor' ),
								'default' => 'off',
								'desc'    => __( 'Enable this to accept payments via Stripe.', 'tutor' ),
							),
						),
					),
					array(
						'label'      => __( 'Legal Information', 'tutor' ),
						'slug'       => 'legal_information',
						'block_type' => 'uniform',
						'fields'     => array(
							array(
								'key'     => OptionKeys::REFUND_POLICY,
								'type'    => 'select',
								'label'   => __( 'Refund Policy', 'tutor' ),
								'default' => 0,
								'options' => $pages,
								'desc'    => __( 'Choose the page for instructor registration.', 'tutor' ),
							),
							array(
								'key'     => OptionKeys::PRIVACY_POLICY,
								'type'    => 'select',
								'label'   => __( 'Privacy Policy', 'tutor' ),
								'default' => 0,
								'options' => $pages,
								'desc'    => __( 'Choose the page for student registration.', 'tutor' ),
							),
						),
					),
				),
			),
		);

		return apply_filters( 'tutor_after_ecommerce_settings', $fields + $arr );
	}
}
