<?php
/**
 * Coupon Model
 *
 * @package Tutor\Models
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 3.0.0
 */

namespace Tutor\Models;

use Tutor\Helpers\QueryHelper;

/**
 * Coupon model class
 */
class CouponModel {

	/**
	 * Coupon status
	 *
	 * @since 3.0.0
	 *
	 * @var string
	 */
	const STATUS_ACTIVE   = 'active';
	const STATUS_INACTIVE = 'inactive';
	const STATUS_TRASH    = 'trash';

	/**
	 * Coupon table name
	 *
	 * @since 3.0.0
	 *
	 * @var string
	 */
	private $table_name = 'tutor_coupons';

	/**
	 * Coupon usage table name
	 *
	 * @since 3.0.0
	 *
	 * @var string
	 */
	private $coupon_usage_table = 'tutor_coupon_usages';

	/**
	 * Resolve props & dependencies
	 *
	 * @since 3.0.0
	 */
	public function __construct() {
		global $wpdb;
		$this->table_name         = $wpdb->prefix . $this->table_name;
		$this->coupon_usage_table = $wpdb->prefix . $this->coupon_usage_table;
	}

	/**
	 * Get table name with wp prefix
	 *
	 * @since 3.0.0
	 *
	 * @return string
	 */
	public function get_table_name() {
		return $this->table_name;
	}

	/**
	 * Get all order statuses
	 *
	 * @since 3.0.0
	 *
	 * @return array
	 */
	public static function get_coupon_status() {
		return array(
			self::STATUS_ACTIVE   => __( 'Active', 'tutor' ),
			self::STATUS_INACTIVE => __( 'Inactive', 'tutor' ),
			self::STATUS_TRASH    => __( 'Trash', 'tutor' ),
		);
	}

	/**
	 * Get searchable fields
	 *
	 * This method is intendant to use with get order list
	 *
	 * @since 3.0.0
	 *
	 * @return array
	 */
	private function get_searchable_fields() {
		return array(
			'id',
			'coupon_status',
			'coupon_code',
			'coupon_title',
		);
	}

	/**
	 * Get coupons list
	 *
	 * @since 3.0.0
	 *
	 * @param array  $where where clause conditions.
	 * @param string $search_term search clause conditions.
	 * @param int    $limit limit default 10.
	 * @param int    $offset default 0.
	 * @param string $order_by column default 'o.id'.
	 * @param string $order list Coupon default 'desc'.
	 *
	 * @return array
	 */
	public function get_coupons( array $where = array(), $search_term = '', int $limit = 10, int $offset = 0, string $order_by = 'id', string $order = 'desc' ) {

		$search_clause = array();
		if ( '' !== $search_term ) {
			foreach ( $this->get_searchable_fields() as $column ) {
				$search_clause[ $column ] = $search_term;
			}
		}

		$response = array(
			'results'     => array(),
			'total_count' => 0,
		);

		try {
			$response = QueryHelper::get_all_with_search( $this->table_name, $where, $search_clause, $order_by, $limit, $offset, $order );

			// Add coupon usage count.
			foreach ( $response['results'] as $result ) {
				$result->usage_count = $this->get_coupon_usage_count( $result->coupon_code );
			}

			return $response;
		} catch ( \Throwable $th ) {
			// Log with error, line & file name.
			error_log( $th->getMessage() . ' in ' . $th->getFile() . ' at line ' . $th->getLine() );
			return $response;
		}
	}

	/**
	 * Update coupon
	 *
	 * @since 3.0.0
	 *
	 * @param int|array $coupon_id Integer or array of ids sql escaped.
	 * @param array     $data Data to update, escape data.
	 *
	 * @return bool
	 */
	public function update_coupon( $coupon_id, array $data ) {
		$coupon_ids = is_array( $coupon_id ) ? $coupon_id : array( $coupon_id );
		$coupon_ids = QueryHelper::prepare_in_clause( $coupon_ids );
		try {
			QueryHelper::update_where_in(
				$this->table_name,
				$data,
				$coupon_ids
			);
			return true;
		} catch ( \Throwable $th ) {
			error_log( $th->getMessage() . ' in ' . $th->getFile() . ' at line ' . $th->getLine() );
			return false;
		}
	}

	/**
	 * Update coupon
	 *
	 * @since 3.0.0
	 *
	 * @param int|array $coupon_id Integer or array of ids sql escaped.
	 *
	 * @return bool
	 */
	public function delete_coupon( $coupon_id ) {
		$coupon_ids = is_array( $coupon_id ) ? $coupon_id : array( $coupon_id );

		try {
			QueryHelper::bulk_delete_by_ids(
				$this->table_name,
				$coupon_ids
			);
			return true;
		} catch ( \Throwable $th ) {
			error_log( $th->getMessage() . ' in ' . $th->getFile() . ' at line ' . $th->getLine() );
			return false;
		}
	}

	/**
	 * Get Coupon count
	 *
	 * @since 3.0.0
	 *
	 * @param array  $where Where conditions, sql esc data.
	 * @param string $search_term Search terms, sql esc data.
	 *
	 * @return int
	 */
	public function get_coupon_count( $where = array(), string $search_term = '' ) {
		$search_clause = array();
		if ( '' !== $search_term ) {
			foreach ( $this->get_searchable_fields() as $column ) {
				$search_clause[ $column ] = $search_term;
			}
		}

		return QueryHelper::get_count( $this->table_name, $where, $search_clause, '*' );
	}

	/**
	 * Get coupon usage count
	 *
	 * @since 3.0.0
	 *
	 * @param mixed $coupon_code Coupon code.
	 *
	 * @return int
	 */
	public function get_coupon_usage_count( $coupon_code ) {
		return QueryHelper::get_count(
			$this->coupon_usage_table,
			array( 'coupon_code' => $coupon_code ),
			array(),
			'*'
		);
	}

	/**
	 * Retrieve a coupon by its ID.
	 *
	 * This function fetches the coupon data from the database based on the provided coupon ID.
	 * If the coupon is found, it returns the coupon data; otherwise, it returns false.
	 *
	 * @since 3.0.0
	 *
	 * @param int $coupon_id The ID of the coupon to retrieve.
	 *
	 * @return object|false The coupon data as an object if found, or false if not found.
	 */
	public function get_coupon_by_id( $coupon_id ) {
		$coupon_data = QueryHelper::get_row(
			$this->table_name,
			array( 'id' => $coupon_id ),
			'id'
		);

		if ( ! $coupon_data ) {
			return false;
		}

		return $coupon_data;
	}
}
