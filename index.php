<?php get_header(); ?>
<div class="container">
    <div class="main-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <!-- <span><?php the_category(); ?></span> -->
                    <div class="article-excerpt"><?php the_excerpt(); ?></div>
                    <div class="article-post-tag">
                        <div class="article-tag">
                            <?php
                            if (get_the_tag_list()) {
                                echo get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>');
                            }
                            ?>
                        </div>
                        <span class="article-post-date"><?php the_time('Y-n-j'); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class=”post”>
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="pagination">
            <?php posts_nav_link(' | ', '上一页', '下一页'); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>