<?php
/**
 * Free v Pro
 *
 * @package Ronny
 */

$icons = array(
	'0' => '<span class="dashicons dashicons-no-alt"></span>',
	'1' => '<span class="dashicons dashicons-saved"></span>',
);
?>
<div class="ronny-dashboard-content">
    <div class="ronny-dashboard-panel ronny-compare-panel">

        <header class="ronny-panel-header">
            <h2><?php esc_html_e('Unlock More with Ronny Pro', 'ronny'); ?></h2>
            <p><?php esc_html_e('Unlock all the possibilties and true potential with premium version of this theme', 'ronny'); ?></p>
            <a href="<?php echo esc_url($this->theme_url); ?>" target="_blank"
               class="button button-primary"><?php esc_html_e('Upgrade To Pro', 'ronny'); ?></a>
        </header>

        <div class="ronny-panel-content">

            <table>
                <thead>
                <tr>
                    <th class="ronny-text-left"><?php esc_html_e('Features', 'ronny'); ?></th>
                    <th class="ronny-text-center"><?php esc_html_e('Free', 'ronny'); ?></th>
                    <th class="ronny-text-center"><?php esc_html_e('Pro', 'ronny'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $free_vs_pro = array(
                    array(
                        'feature' => __('Help and support', 'ronny'),
                        'free' => __('Standard support', 'ronny'),
                        'pro' => __('High priority support', 'ronny'),
                    ),
                    array(
                        'feature' => __('Predesigned website templates', 'ronny'),
                        'free' => __('5', 'ronny'),
                        'pro' => __('15+', 'ronny'),
                    ),
                    array(
                        'feature' => __('Seo optimized', 'ronny'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Translation ready', 'ronny'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('RTL ready', 'ronny'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('WooCommerce ready', 'ronny'),
                        'free' => 1,
                        'pro' => __('With more options', 'ronny'),
                    ),
                    array(
                        'feature' => __('Preloader option', 'ronny'),
                        'free' => 0,
                        'pro' => __('5+ Preloaders', 'ronny'),
                    ),
                    array(
                        'feature' => __('Progressbar option', 'ronny'),
                        'free' => 0,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Typography font option', 'ronny'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Typography color option', 'ronny'),
                        'free' => 1,
                        'pro' => __('Additional 1200+ Google Fonts', 'ronny'),
                    ),
                    array(
                        'feature' => __('Color option', 'ronny'),
                        'free' => 1,
                        'pro' => __('With more options', 'ronny'),
                    ),
                    array(
                        'feature' => __('Darkmode option', 'ronny'),
                        'free' => 0,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Scroll To Top', 'ronny'),
                        'free' => 1,
                        'pro' => __('With more options', 'ronny'),
                    ),
                );
                foreach ($free_vs_pro as $features) :
                    ?>
                    <tr>
                        <td class="ronny-text-left"><?php echo esc_html($features['feature']); ?></td>
                        <td class="ronny-text-center">
                            <?php
                            if (1 === $features['free']) {
                                echo $icons[1];
                            } elseif (0 === $features['free']) {
                                echo $icons[0];
                            } else {
                                echo esc_html($features['free']);
                            }
                            ?>
                        </td>
                        <td class="ronny-text-center">
                            <?php
                            if (1 === $features['pro']) {
                                echo $icons[1];
                            } elseif (0 === $features['pro']) {
                                echo $icons[0];
                            } else {
                                echo esc_html($features['pro']);
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
            <div class="free-vs-pro-footer">
                <a href="<?php echo esc_url($this->theme_url); ?>"
                   class="button button-secondary ronny-button ronny-button-secondary" target="_blank">
                    <?php esc_html_e('And many more features', 'ronny'); ?><span
                            class="dashicons dashicons-external"></span>
                </a>
            </div>
        </div>
    </div>
</div>
