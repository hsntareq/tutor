<?php
/**
 * Instructors List Template.
 *
 * @package Instructors List
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( isset( $_GET['sub_page'] ) ) {
	$page = sanitize_text_field( $_GET['sub_page'] );
	include_once tutor()->path . "views/pages/{$page}.php";
	return;
}

use TUTOR\Instructors_List;
$instructors = new Instructors_List();


/**
 * Short able params
 */
$user_id   = isset( $_GET['user_id'] ) ? $_GET['user_id'] : '';
$course_id = isset( $_GET['course-id'] ) ? $_GET['course-id'] : '';
$order     = isset( $_GET['order'] ) ? $_GET['order'] : 'DESC';
$date      = isset( $_GET['date'] ) ? $_GET['date'] : '';
$search    = isset( $_GET['search'] ) ? $_GET['search'] : '';

/**
 * Determine active tab
 */
$active_tab = isset( $_GET['data'] ) && $_GET['data'] !== '' ? esc_html__( $_GET['data'] ) : 'all';

/**
 * Pagination data
 */
$paged    = ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] >= 1 ) ? $_GET['paged'] : 1;
$per_page = tutor_utils()->get_option( 'pagination_per_page' );
$offset   = ( $per_page * $paged ) - $per_page;

// Available status for instructor.
$instructor_status = array( 'approved', 'pending', 'blocked' );
if ( 'pending' === $active_tab ) {
	$instructor_status = array( 'pending' );
} elseif ( 'blocked' === $active_tab ) {
	$instructor_status = array( 'blocked' );
}
$instructors_list = tutor_utils()->get_instructors( $offset, $per_page, $search, $course_id, $date, $order, $instructor_status );
$total            = tutor_utils()->get_total_instructors( $search, $instructor_status, $course_id, $date );

/**
 * Navbar data to make nav menu
 */
$url               = get_pagenum_link();
$add_insructor_url = $url . '&sub_page=add_new_instructor';
$navbar_data       = array(
	'page_title'   => $instructors->page_title,
	'tabs'         => $instructors->tabs_key_value( $search, $course_id, $date ),
	'active'       => $active_tab,
	'add_button'   => true,
	'button_title' => __( 'Add New', 'tutor' ),
	'button_url'   => $add_insructor_url,
);

$filters = array(
	'bulk_action'   => $instructors->bulk_action,
	'bulk_actions'  => $instructors->prpare_bulk_actions(),
	'ajax_action'   => 'tutor_instructor_bulk_action',
	'filters'       => true,
	'course_filter' => true,
);

?>

<?php
	/**
	 * Load Templates with data.
	 */
	$navbar_template  = tutor()->path . 'views/elements/navbar.php';
	$filters_template = tutor()->path . 'views/elements/filters.php';
	tutor_load_template_from_custom_path( $navbar_template, $navbar_data );
	tutor_load_template_from_custom_path( $filters_template, $filters );

?>

<div class="wrap">
	<div class="tutor-ui-table-responsive tutor-mt-30">
		<table class="tutor-ui-table tutor-ui-table-responsive table-instructors">
			<thead>
			<tr>
				<th width="3%">
					<div class="d-flex">
						<input type="checkbox" id="tutor-bulk-checkbox-all" class="tutor-form-check-input" />
					</div>
				</th>
				<th class="tutor-table-rows-sorting">
					<div class="inline-flex-center color-text-subsued">
						<span class="text-regular-small tutor-ml-5"> <?php esc_html_e( 'Name', 'tutor' ); ?></span>
						<span class="ttr-ordering-a-to-z-filled a-to-z-sort-icon"></span>
					</div>
				</th>
				<th class="tutor-table-rows-sorting">
					<div class="inline-flex-center color-text-subsued">
						<span class="text-regular-small"><?php esc_html_e( 'Email', 'tutor' ); ?></span>
						<span class="ttr-order-down-filled up-down-icon"></span>
					</div>
				</th>
				<th class="tutor-table-rows-sorting">
					<div class="inline-flex-center color-text-subsued">
						<span class="text-regular-small"><?php esc_html_e( 'Total Course', 'tutor' ); ?></span>
						<span class="ttr-order-down-filled up-down-icon"></span>
					</div>
				</th>
				<th class="tutor-table-rows-sorting">
				<div class="inline-flex-center color-text-subsued">
					<span class="text-regular-small"><?php esc_html_e( 'Status', 'tutor' ); ?></span>
					<span class="ttr-order-down-filled up-down-icon"></span>
				</div>
				</th>
				<th class="tutor-shrink"></th>
			</tr>
			</thead>
			<tbody>
				<?php if ( is_array( $instructors_list ) && count( $instructors_list ) ) : ?>
	
					<?php
					foreach ( $instructors_list as $list ) :
						$alert = ( 'pending' === $list->status ? 'warning' : ( 'approved' === $list->status ? 'success' : ( 'blocked' === $list->status ? 'danger' : 'default' ) ) );
						?>
						
						<tr>
							<td data-th="<?php esc_html_e( 'Checkbox', 'tutor' ); ?>">
								<div class="td-checkbox d-flex ">
									<input id="tutor-admin-list-<?php esc_attr_e( $list->ID ); ?>" type="checkbox" class="tutor-form-check-input tutor-bulk-checkbox" name="tutor-bulk-checkbox-all" value="<?php echo esc_attr( $list->ID ); ?>" />
								</div>
							</td>
							<td data-th="<?php esc_html_e( 'Avatar', 'tutor' ); ?>" class="column-fullwidth">
								<div class="td-avatar">
								<?php $avatar_url = get_avatar_url( $list->ID ); ?>
									<img src="<?php echo esc_url( $avatar_url ); ?>" alt="student avatar"/>
									<p class="color-text-primary text-medium-body">
									<?php echo esc_html( $list->display_name ); ?>
									</p>
								<?php $edit_link = add_query_arg( 'user_id', $list->ID, self_admin_url( 'user-edit.php' ) ); ?>
									<a href="<?php echo esc_url( $edit_link ); ?>" class="btn-text btn-detail-link color-design-dark">
										<span class="ttr-detail-link-filled tutor-mt-5"></span>
									</a>
								</div>
							</td>
							<td data-th="<?php esc_html_e( 'Email', 'tutor' ); ?>">
								<span class="color-text-primary text-regular-caption">
							<?php echo esc_html( $list->user_email ); ?>
								</span>
							</td>
							</td>
							<td data-th="<?php esc_html_e( 'Total Course', 'tutor' ); ?>">
								<span class="color-text-primary text-regular-caption">
							<?php echo esc_html( $instructors->column_total_course( $list, 'total_course' ) ); ?>
								</span>
							</td>
							<td data-th="<?php esc_html_e( 'Status', 'tutor' ); ?>">
								<span class="color-text-primary text-medium-caption">
									<span class="tutor-badge-label label-<?php echo esc_attr( $alert ); ?>">
									<?php echo esc_html( tutor_utils()->translate_dynamic_text( $list->status ) ); ?>
									</span>
								</span>
							</td>
							<td data-th="<?php esc_html_e( 'URL', 'tutor' ); ?>">
							<div class="inline-flex-center td-action-btns">
							<?php echo wp_kses_post( $instructors->column_action( $list, 'status' ) ); ?>
							</div>
							</td>
						</tr>
					<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="100%">
								<?php tutor_utils()->tutor_empty_state(); ?>
							</td>
						</tr>
				<?php endif; ?>	
			</tbody>
		</table>
		</div>
	<div class="tutor-admin-page-pagination-wrapper tutor-mt-50">
		<?php
			/**
			 * Prepare pagination data & load template
			 */
			$pagination_data     = array(
				'total_items' => $total,
				'per_page'    => $per_page,
				'paged'       => $paged,
			);
			$pagination_template = tutor()->path . 'views/elements/pagination.php';
			tutor_load_template_from_custom_path( $pagination_template, $pagination_data );
			?>
	</div>
</div>
