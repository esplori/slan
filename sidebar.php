<div class="sidebar">
        <?php wp_list_pages(); ?>
        <ul>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar()) : else : ?>
                <li id="search">
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                </li>
                <li>
                    <?php _e('Calender') ?>
                    <?php get_calendar() ?>
                </li>
                <li>
                    <ul>
                        <?php wp_list_categories('orderby=name&show_count=1') ?>
                    </ul>
                </li>
                <li>
                    <?php _e('Archives') ?>
                    <ul>
                        <?php wp_get_archives('type=monthly') ?>
                    </ul>
                </li>
                <li>
                    <h2><?php _e('Meta'); ?></h2>
                    <ul>
                        <?php wp_register(); ?>

                        <li><?php wp_loginout(); ?></li>
                        <!-- <?php wp_meta(); ?> -->
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>