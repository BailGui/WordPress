<?php
/**
 * Title: Magazine Block 04
 * * Slug: ronny/magazine-grid-04
 * * Categories: magazine
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">


    <!-- wp:group {"align":"wide","className":"section-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide section-header">
        <!-- wp:heading {"fontSize":"small","fontFamily":"sans-serif"} -->
        <h2 class="wp-block-heading has-sans-serif-font-family has-small-font-size"><a href="#">Category Name</a></h2>
        <!-- /wp:heading -->


        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"has-custom-width is-style-tertiary-button"} -->
            <div class="wp-block-button has-custom-width is-style-tertiary-button"><a class="wp-block-button__link wp-element-button">View All</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

    <!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"grid","columnCount":4}} -->
        <!-- wp:cover {"useFeaturedImage":true,"minHeight":255,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","className":"ronny-hover-shine","layout":{"type":"constrained"}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-left ronny-hover-shine has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:255px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0.11) 33%,rgb(0,0,0) 100%)"></span>
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

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"medium"} /-->

            </div>
        </div>
        <!-- /wp:cover -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->