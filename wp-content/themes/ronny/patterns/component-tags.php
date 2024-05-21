<?php
/**
 * Title: Trending Top Tags
 * Slug: ronny/trending-top-tags
 * Categories: components
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"width":"36px","height":"36px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/ronny-trending.webp" alt="" style="object-fit:cover;width:36px;height:36px"/>
                </figure>
                <!-- /wp:image -->
                <!-- wp:heading {"fontSize":"medium"} -->
                <h2 class="wp-block-heading has-medium-font-size">Trending</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
            <!-- wp:tag-cloud {"numberOfTags":7,"smallestFontSize":"11pt","largestFontSize":"11pt"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Subscribe</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->