<?php
/**
 * Title: Header Default
 * Slug: ronny/header-default
 * Categories: header
 */
?>

<!-- wp:group {"align":"full","style":{"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"},"className":"ronny-block-topbar"} -->
    <div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color ronny-block-topbar" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center">

                    <!-- wp:column {"verticalAlignment":"center","width":"200px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:200px">
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"metadata":{"name":""}} -->
                        <div class="wp-block-group">
                            <!-- wp:heading {"level":3,"className":"ronny-breaking-news"} -->
                            <h3 class="wp-block-heading ronny-breaking-news"><span class="ronny-ticker-loader"></span> Breaking News</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center">
                        <!-- wp:group {"className":"ronny-header-ticker"} -->
                        <div class="wp-block-group ronny-header-ticker">
                            <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"swiper ronny-ticker"} -->
                            <div class="wp-block-query swiper ronny-ticker">
                                <!-- wp:post-template {"className":"ronny-swiper-holder swiper-wrapper","layout":{"type":"default"}} -->
                                <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-small"} /-->
                                <!-- /wp:post-template -->

                                <!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"ronny-ticker-controller","layout":{"type":"constrained"}} -->
                                <div id="ticker-controls" class="wp-block-group ronny-ticker-controller" style="margin-top:0;margin-bottom:0"><!-- wp:html -->
                                    <div class="swiper-button-prev ronny-ticker-prev"></div>
                                    <div class="swiper-button-next ronny-ticker-next"></div>
                                    <!-- /wp:html --></div>
                                <!-- /wp:group --></div>
                            <!-- /wp:query --></div>
                        <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                <!-- /wp:columns -->


            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#ffffff","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"left":"6px"}},"layout":{"selfStretch":"fixed","flexSize":"227px"}},"className":"is-style-social-icon-size-small","layout":{"type":"flex","justifyContent":"right"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-social-icon-size-small"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"lastfm"} /--></ul>
                <!-- /wp:social-links --></div>
            <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-bg.webp","dimRatio":80,"minHeight":160,"customGradient":"linear-gradient(to bottom,transparent,#000)","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:160px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(to bottom,transparent,#000)"></span>
        <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-bg.webp" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
            <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group">

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:site-logo {"width":48} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:site-title {"level":0} /-->
                            <!-- wp:site-tagline {"fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"728px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image size-full">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-promo-banner.webp" alt="" style="object-fit:cover"/>
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->



    <!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"dark-gray","textColor":"base","className":"ronny-site-navigation","layout":{"type":"constrained"}} -->
    <div class="wp-block-group ronny-site-navigation has-base-color has-dark-gray-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="padding-right:0;padding-left:0">

            <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group">

                <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"header-modal"} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group --></div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->