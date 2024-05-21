<?php
/**
 * Title: Magazine Block 03
 * Slug: ronny/magazine-grid-03
 * Categories: magazine
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:query {"query":{"perPage":"4","pages":"","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->
                <!-- wp:columns {"verticalAlignment":"center","style":{"border":{"width":"1px"},"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"mono"} -->
                <div class="wp-block-columns are-vertically-aligned-center has-border-color has-mono-border-color" style="border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                    <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
                        <!-- wp:post-featured-image {"isLink":true,"height":"100px"} /-->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:post-date /-->
                                <!-- wp:paragraph -->
                                <p>•</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:post-terms {"term":"category"} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->
                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p>Please add blog posts to your website, to make this section work. You can add posts under Posts -&gt; Add New</p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results --></div>
            <!-- /wp:query -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query">
                <!-- wp:post-template {"layout":{"type":"default"}} -->

                <!-- wp:post-featured-image {"isLink":true,"height":"470px","sizeSlug":"large"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-date /-->
                    <!-- wp:paragraph -->
                    <p>•</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-terms {"term":"category"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"x-large"} /-->

                <!-- wp:post-excerpt {"excerptLength":40} /-->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results --></div>
            <!-- /wp:query --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"200px","sizeSlug":"large"} /-->


            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:post-date /-->
                <!-- wp:paragraph -->
                <p>•</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-terms {"term":"category"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"small"} /-->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results --></div>
        <!-- /wp:query --></div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->