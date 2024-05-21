<?php
/**
 * Title: Magazine Block 02
 * Slug: ronny/magazine-grid-02
 * Categories: magazine
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">



        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
                <div class="wp-block-group section-header">
                    <!-- wp:heading {"fontSize":"small","fontFamily":"sans-serif"} -->
                    <h2 class="wp-block-heading has-sans-serif-font-family has-small-font-size"><a href="#">Category Name</a></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="margin-top:1.5em">
                    <!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
                    <div class="wp-block-query">
                        <!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
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
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"big"} /-->
                        </div>
                        <!-- /wp:group -->



                        <!-- wp:post-excerpt {"excerptLength":18} /-->
                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"className":"post-list-title border-top"} -->
                    <div class="wp-block-query post-list-title border-top"><!-- wp:post-template {"layout":{"type":"default"},"fontSize":"small"} -->
                        <!-- wp:separator {"backgroundColor":"mono","className":"is-style-separator-dotted"} -->
                        <hr class="wp-block-separator has-text-color has-mono-color has-alpha-channel-opacity has-mono-background-color has-background is-style-separator-dotted"/>
                        <!-- /wp:separator -->
                        <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
                <div class="wp-block-group section-header">
                    <!-- wp:heading {"fontSize":"small","fontFamily":"sans-serif"} -->
                    <h2 class="wp-block-heading has-sans-serif-font-family has-small-font-size"><a href="#">Category Name</a></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="margin-top:1.5em">
                    <!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
                    <div class="wp-block-query">
                        <!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
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
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"big"} /-->
                        </div>
                        <!-- /wp:group -->



                        <!-- wp:post-excerpt {"excerptLength":18} /-->
                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"className":"post-list-title border-top"} -->
                    <div class="wp-block-query post-list-title border-top"><!-- wp:post-template {"layout":{"type":"default"},"fontSize":"small"} -->
                        <!-- wp:separator {"backgroundColor":"mono","className":"is-style-separator-dotted"} -->
                        <hr class="wp-block-separator has-text-color has-mono-color has-alpha-channel-opacity has-mono-background-color has-background is-style-separator-dotted"/>
                        <!-- /wp:separator -->
                        <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
                <div class="wp-block-group section-header">
                    <!-- wp:heading {"fontSize":"small","fontFamily":"sans-serif"} -->
                    <h2 class="wp-block-heading has-sans-serif-font-family has-small-font-size"><a href="#">Category Name</a></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="margin-top:1.5em">
                    <!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
                    <div class="wp-block-query">
                        <!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
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
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"big"} /-->
                        </div>
                        <!-- /wp:group -->



                        <!-- wp:post-excerpt {"excerptLength":18} /-->
                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"className":"post-list-title border-top"} -->
                    <div class="wp-block-query post-list-title border-top"><!-- wp:post-template {"layout":{"type":"default"},"fontSize":"small"} -->
                        <!-- wp:separator {"backgroundColor":"mono","className":"is-style-separator-dotted"} -->
                        <hr class="wp-block-separator has-text-color has-mono-color has-alpha-channel-opacity has-mono-background-color has-background is-style-separator-dotted"/>
                        <!-- /wp:separator -->
                        <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results --></div>
                    <!-- /wp:query --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->



    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->