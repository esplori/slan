<div class="sidebar">
    <ul>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar()) : else : ?>
            <!-- <li>
                <?php wp_list_pages(); ?>
            </li> -->
            <li id="search">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </li>
            <!-- <li>
                <h3><?php _e('Categories'); ?></h3>
                <ul>
                    <?php wp_list_categories('orderby=name&show_count=0') ?>
                </ul>
            </li> -->
            <!-- <li>
                <h3><?php _e('Archives'); ?></h3>
                <ul>
                    <?php wp_get_archives('type=monthly') ?>
                </ul>
            </li> -->
            <li>
                <h3><?php _e('Meta'); ?></h3>
                <ul>
                    <li><?php wp_register(); ?></li>
                    <li><?php wp_loginout(); ?></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>