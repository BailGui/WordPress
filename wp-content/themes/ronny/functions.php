<?php

namespace Ronny;

if (!function_exists('ronny_theme_support')) {
    /**
     * General Theme Settings.
     *
     * @return void
     * @since v1.0
     *
     */
    function ronny_theme_support()
    {
        // Make theme available for translation: Translations can be filed in the /languages/ directory.
        load_theme_textdomain('ronny', __DIR__ . '/languages');

        // Add support for Post thumbnails.
        add_theme_support('post-thumbnails');
        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for Editor Styles.
        add_theme_support('editor-styles');
        // Enqueue Editor Styles.
        add_editor_style('build/main.css');
    }

    add_action('after_setup_theme', __NAMESPACE__ . '\ronny_theme_support');

    /**
     * Enqueue editor stylesheet (for iframed Post Editor):
     * https://make.wordpress.org/core/2023/07/18/miscellaneous-editor-changes-in-wordpress-6-3/#post-editor-iframed
     *
     * @since v1.0.0
     */
    function ronny_load_editor_styles()
    {
        if (is_admin()) {
            wp_enqueue_style('ronny-editor-style', get_theme_file_uri('style-editor.css'));
        }
    }

    add_action('enqueue_block_assets', __NAMESPACE__ . '\ronny_load_editor_styles');

    // Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
    remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');
    remove_action('enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory');
}

/**
 * Custom Template part.
 *
 * @param array $areas Template part areas.
 *
 * @return array
 */
function ronny_custom_template_part_area($areas)
{
    array_push(
        $areas,
        array(
            'area' => 'query',
            'label' => esc_html__('Query', 'ronny'),
            'description' => esc_html__('Custom query area', 'ronny'),
            'icon' => 'layout',
            'area_tag' => 'div',
        )
    );

    return $areas;
}

add_filter('default_wp_template_part_areas', __NAMESPACE__ . '\ronny_custom_template_part_area');

if (!function_exists('ronny_load_scripts')) {
    /**
     * Enqueue CSS Stylesheets and Javascript files.
     *
     * @return void
     */
    function ronny_load_scripts()
    {
        $theme_version = wp_get_theme()->get('Version');

        // 1. Styles.
        wp_enqueue_style('swiper-bundle-style', get_theme_file_uri('assets/lib/swiper-bundle.css'), array(), $theme_version, 'all');
        wp_enqueue_style('ronny-style', get_stylesheet_uri(), array(), $theme_version);
        wp_enqueue_style('ronny-main', get_theme_file_uri('build/main.css'), array(), $theme_version, 'all'); // main.scss: Compiled custom styles.

        if (is_rtl()) {
            wp_enqueue_style('ronny-rtl', get_theme_file_uri('build/rtl.css'), array(), $theme_version, 'all');
        }

        // 2. Scripts.
        wp_enqueue_script('swiper-bundle-js', get_theme_file_uri('assets/lib/swiper-bundle.js'), array(), $theme_version, true);
        wp_enqueue_script('ronny-main-js', get_theme_file_uri('build/main.js'), array(), $theme_version, true);
    }

    add_action('wp_enqueue_scripts', __NAMESPACE__ . '\ronny_load_scripts');
}

/**
 * Add block style variations.
 */
function ronny_register_block_styles()
{

    $block_styles = array(
        'core/separator' => array(
            'separator-dotted' => __('Dotted', 'ronny'),
            'separator-thin' => __('Thin', 'ronny'),
        ),
        'core/button' => array(
            'primary-button' => __('Primary', 'ronny'),
            'secondary-button' => __('Secondary', 'ronny'),
            'tertiary-button' => __('Tertiary', 'ronny'),
        ),
        'core/cover' => array(
            'blur-image-less' => __('Blur Image Less', 'ronny'),
            'blur-image-more' => __('Blur Image More', 'ronny'),
        ),
        'core/columns' => array(
            'column-box-shadow' => __('Box Shadow', 'ronny'),
        ),
        'core/post-excerpt' => array(
            'excerpt-truncate-2' => __('Truncate 2 Lines', 'ronny'),
            'excerpt-truncate-3' => __('Truncate 3 Lines', 'ronny'),
            'excerpt-truncate-4' => __('Truncate 4 Lines', 'ronny'),
        )
    );

    foreach ($block_styles as $block => $styles) {
        foreach ($styles as $style_name => $style_label) {
            register_block_style(
                $block,
                array(
                    'name' => $style_name,
                    'label' => $style_label,
                )
            );
        }
    }

    register_block_style(
        'core/gallery',
        array(
            'name' => 'enable-grayscale-mode-on-image',
            'label' => __('Activate Grayscale Filter for Images', 'ronny')
        )
    );

    register_block_style(
        'core/details',
        array(
            'name' => 'arrow-icon-details',
            'label' => __('Arrow icon', 'ronny'),
            /*
             * Styles for the custom Arrow icon style of the Details block
             */
            'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\002b\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2212\00a0\00a0\00a0";
				}',
        )
    );
}

add_action('init', __NAMESPACE__ . '\ronny_register_block_styles');


/**
 * Load custom block styles only when the block is used.
 */
function ronny_enqueue_custom_block_styles()
{

    // Scan our styles folder to locate block styles.
    $files = glob(get_template_directory() . '/assets/styles/*.css');

    foreach ($files as $file) {

        // Get the filename and core block name.
        $filename = basename($file, '.css');
        $block_name = str_replace('core-', 'core/', $filename);

        wp_enqueue_block_style(
            $block_name,
            array(
                'handle' => "ronny-block-{$filename}",
                'src' => get_theme_file_uri("assets/styles/{$filename}.css"),
                'path' => get_theme_file_path("assets/styles/{$filename}.css"),
            )
        );
    }
}

add_action('init', __NAMESPACE__ . '\ronny_enqueue_custom_block_styles');

/**
 * Register pattern categories.
 */

if (!function_exists('ronny_pattern_categories')) :
    /**
     * Register pattern categories
     *
     * @return void
     * @since Trevor 1.0
     */
    function ronny_pattern_categories()
    {

        $pattern_categories = array(
            array(
                'slug' => 'page',
                'label' => _x('Pages', 'Block pattern category', 'ronny'),
                'description' => __('A collection of full page layouts.', 'ronny'),
            ),
            array(
                'slug' => 'business',
                'label' => _x('Business', 'Block pattern category', 'ronny'),
                'description' => __('A collection of feature-rich patterns for Multipurpose Business Website.', 'ronny'),
            ),
            array(
                'slug' => 'magazine',
                'label' => _x('Magazine', 'Block pattern category', 'ronny'),
                'description' => __('A collection of feature-rich patterns for News and Magazine Website.', 'ronny'),
            )
        );

        foreach ($pattern_categories as $category) {
            register_block_pattern_category(
                $category['slug'],
                array(
                    'label' => $category['label'],
                    'description' => $category['description'],
                )
            );
        }
    }
endif;

add_action('init', __NAMESPACE__ . '\ronny_pattern_categories');

/**
 * Theme Dashboard
 */
if (is_admin()) {
    require get_theme_file_path('/inc/dashboard/theme-dashboard.php');
}
/**
 * Add back to top.
 *
 * @since 1.0.0
 */
function ronny_add_back_to_top()
{
    echo '<button id="back-to-top">&uarr;</button>';
}

add_action('wp_footer', __NAMESPACE__ . '\ronny_add_back_to_top');
