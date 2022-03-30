<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Since 1.7.9
 * configure query with get params
 *
 * @package Announcement List
 */

use TUTOR\Announcements;
$announcement_obj = new Announcements();

$limit       = tutor_utils()->get_option( 'pagination_per_page' );
$page_filter = ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] >= 1 ) ? $_GET['paged'] : 1;

$order_filter  = ( isset( $_GET['order'] ) && strtolower( $_GET['order'] ) == 'asc' ) ? 'ASC' : 'DESC';
$search_filter = sanitize_text_field( tutor_utils()->array_get( 'search', $_GET, '' ) );
// announcement's parent
$course_id   = sanitize_text_field( tutor_utils()->array_get( 'course-id', $_GET, '' ) );
$date_filter = sanitize_text_field( tutor_utils()->array_get( 'date', $_GET, '' ) );

$year  = date( 'Y', strtotime( $date_filter ) );
$month = date( 'm', strtotime( $date_filter ) );
$day   = date( 'd', strtotime( $date_filter ) );

$args = array(
	'post_type'      => 'tutor_announcements',
	'post_status'    => 'publish',
	's'              => $search_filter,
	'post_parent'    => $course_id,
	'posts_per_page' => sanitize_text_field( $limit ),
	'paged'          => sanitize_text_field( $page_filter ),
	'orderBy'        => 'ID',
	'order'          => sanitize_text_field( $order_filter ),

);
if ( ! empty( $date_filter ) ) {
	$args['date_query'] = array(
		array(
			'year'  => $year,
			'month' => $month,
			'day'   => $day,
		),
	);
}
if ( ! current_user_can( 'administrator' ) ) {
	$args['author'] = get_current_user_id();
}
$the_query = new WP_Query( $args );

/**
 * Navbar data to make nav menu
 */
$navbar_data = array(
	'page_title' => $announcement_obj->page_title,
);

/**
 * Filters for sorting searching
 */
$filters = array(
	'bulk_action'   => $announcement_obj->bulk_action,
	'bulk_actions'  => $announcement_obj->prepare_bulk_actions(),
	'ajax_action'   => 'tutor_announcement_bulk_action',
	'filters'       => true,
	'course_filter' => true,
);
?>

<div class="tutor-admin-wrap">
	<?php
		/**
		 * Load Templates with data.
		 */
		$filters_template = tutor()->path . 'views/elements/filters.php';
		$navbar_template  = tutor()->path . 'views/elements/navbar.php';
		tutor_load_template_from_custom_path( $navbar_template, $navbar_data );
	?>

	<div class="tutor-px-20 tutor-mb-24">
		<div class="tutor-card tutor-p-24">
			<div class="tutor-row tutor-align-items-lg-center">
				<div class="tutor-col-lg-auto tutor-mb-16 tutor-mb-lg-0">
					<div class="tutor-round-icon tutor-color-brand-wordpress tutor-fs-2 tutor-p-8">
						<i class="tutor-icon-bullhorn" area-hidden="true"></i>
					</div>
				</div>

				<div class="tutor-col tutor-mb-16 tutor-mb-lg-0">
					<div class="tutor-fs-6 tutor-color-muted tutor-mb-4">
						<?php esc_html_e( 'Create Announcement', 'tutor' ); ?>
					</div>
					<div class="tutor-fs-5 tutor-color-black">
						<?php esc_html_e( 'Notify all students of your course', 'tutor' ); ?>
					</div>
				</div>

				<div class="tutor-col-lg-auto">
					<button type="button" class="tutor-btn tutor-btn-primary tutor-btn-lg" data-tutor-modal-target="tutor_announcement_new">
						<?php esc_html_e( 'Add New Announcement', 'tutor' ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>

	<?php
		tutor_load_template_from_custom_path( $filters_template, $filters );
	?>

	<div class="tutor-admin-body">
		<div class="tutor-admin-announcements-list tutor-mt-24">
		<?php
			$announcements         = $the_query->have_posts() ? $the_query->posts : array();
			$announcement_template = tutor()->path . '/views/fragments/announcement-list.php';
			tutor_load_template_from_custom_path(
				$announcement_template,
				array(
					'announcements' => is_array( $announcements ) ? $announcements : array(),
					'the_query'     => $the_query,
					'paged'         => $page_filter,
				)
			);
		?>
		</div>
	</div>
</div>
