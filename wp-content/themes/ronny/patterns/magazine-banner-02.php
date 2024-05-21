<?php
/**
 * Title: Magazine Banner 02
 * Slug: ronny/magazine-banner-02
 * Categories: magazine
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:cover {"useFeaturedImage":true,"minHeight":560,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","className":"ronny-hover-shine","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left ronny-hover-shine has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20);min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)"></span>
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-date /-->
                            <!-- wp:paragraph -->
                            <p>•</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:post-terms {"term":"category"} /-->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"big"} /-->
                        <!-- wp:post-excerpt {"excerptLength":18} /-->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%">
            <!-- wp:query {"query":{"perPage":"2","pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query">
                <!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default","columnCount":2}} -->
                <!-- wp:cover {"useFeaturedImage":true,"minHeight":275,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","className":"ronny-hover-shine","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left ronny-hover-shine has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:275px">
                    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)"></span>
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:post-terms {"term":"category"} /-->
                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"medium"} /-->
                        <!-- wp:post-date /-->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:post-template -->
                </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%">
            <!-- wp:query {"query":{"perPage":"6","pages":0,"offset":3,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query">
                <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"},"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:0;padding-bottom:0">
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
                            <!-- wp:post-featured-image {"isLink":true,"height":"85px"} /-->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small"} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
