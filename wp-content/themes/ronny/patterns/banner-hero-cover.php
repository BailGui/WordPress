<?php
/**
 * Title: Hero Banner Cover
 * Slug: ronny/banner-hero-cover
 * Categories: magazine
 * Keywords: hero banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-hero-magazine.webp","dimRatio":80,"minHeight":520,"gradient":"red-to-yellow","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:520px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-red-to-yellow-gradient-background"></span>
        <img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-hero-magazine.webp" alt="<?php esc_attr_e( 'High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'ronny' ); ?>" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:column {"width":"100%"} -->
                <div class="wp-block-column" style="flex-basis:100%">
                    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
                    <h2 class="wp-block-heading has-text-align-center has-dark-gray-color has-text-color has-link-color">Stay Informed: Latest War Coverage</h2>
                    <!-- /wp:heading -->


                    <!-- wp:paragraph {"align":"center","textColor":"dark-gray","fontSize":"medium","fontFamily":"sans-serif"} -->
                    <p class="has-text-align-center has-dark-gray-color has-text-color has-sans-serif-font-family has-medium-font-size">Stay ahead of the curve with real-time updates on global conflicts. Our comprehensive coverage keeps you informed about the latest developments in ongoing wars.</p>
                    <!-- /wp:paragraph -->


                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button" href="#">Russia-Ukraine war</a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-bk-button-secondary is-style-fill"} -->
                        <div class="wp-block-button is-style-bk-button-secondary is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">Israel War on Gaza</a></div>
                        <!-- /wp:button --></div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->