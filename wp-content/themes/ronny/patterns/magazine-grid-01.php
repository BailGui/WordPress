<?php
/**
 * Title: Magazine Block 01
 * Slug: ronny/magazine-grid-01
 * Categories: magazine
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:query {"query":{"perPage":"6","pages":"","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
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
<!-- /wp:group -->