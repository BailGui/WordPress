<?php
/**
 * Admin functions.
 *
 * @package Spoken English Classes
 */

define('SPOKEN_ENGLISH_CLASSES_SUPPORT',__('https://wordpress.org/support/theme/spoken-english-classes/','spoken-english-classes'));
define('SPOKEN_ENGLISH_CLASSES_REVIEW',__('https://wordpress.org/support/theme/spoken-english-classes/reviews/#new-post','spoken-english-classes'));
define('SPOKEN_ENGLISH_CLASSES_DOC_URL',__('https://preview.wpradiant.net/tutorial/spoken-english-classes-free/','spoken-english-classes'));
define('SPOKEN_ENGLISH_CLASSES_BUY_NOW',__('https://www.wpradiant.net/products/spoken-english-classes-wordpress-theme/','spoken-english-classes'));
define('SPOKEN_ENGLISH_CLASSES_LIVE_DEMO',__('https://www.preview.wpradiant.net/spoken-english-classes/','spoken-english-classes'));
define('SPOKEN_ENGLISH_CLASSES_PRO_DOC',__('https://www.wpradiant.net/tutorial/spoken-english-classes-pro/','spoken-english-classes'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function spoken_english_classes_admin_menu_page() {

	$spoken_english_classes_theme = wp_get_theme( get_template() );

	add_theme_page(
		$spoken_english_classes_theme->display( 'Name' ),
		$spoken_english_classes_theme->display( 'Name' ),
		'manage_options',
		'spoken-english-classes',
		'spoken_english_classes_do_admin_page'
	);

}
add_action( 'admin_menu', 'spoken_english_classes_admin_menu_page' );

function spoken_english_classes_admin_theme_style() {
	wp_enqueue_style('spoken-english-classes-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
}
add_action('admin_enqueue_scripts', 'spoken_english_classes_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function spoken_english_classes_do_admin_page() {

	$spoken_english_classes_theme = wp_get_theme( get_template() );
	?>
	<div class="spoken-english-classes-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $spoken_english_classes_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'spoken-english-classes' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'spoken-english-classes' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'spoken-english-classes' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $spoken_english_classes_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $spoken_english_classes_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $spoken_english_classes_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'spoken-english-classes' ); ?></h3>

				<p>
					<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'spoken-english-classes' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'spoken-english-classes' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'spoken-english-classes' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'spoken-english-classes' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'spoken-english-classes' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'spoken-english-classes' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'spoken-english-classes' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'spoken-english-classes' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'spoken-english-classes' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'spoken-english-classes' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( SPOKEN_ENGLISH_CLASSES_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'spoken-english-classes' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->

	</div><!-- .wrap -->
	<?php

}