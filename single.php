<?php get_header(); ?>
<div class="container">
    <div class="main-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-article">
                    <h2 class="single-title"><?php the_title(); ?></h2>
                    <div class="single-info">
                        <span class="article-post-date"><?php the_time('Y-m-d H:i l'); ?></span>
                    </div>
                    <h3 class="single-content"><?php the_content(); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class=”post”>
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <!-- <div class="single-pagination">
            上一篇：<?php previous_post_link('%link') ?> 下一篇：<?php next_post_link('%link') ?>
        </div> -->
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>