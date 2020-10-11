<?php get_header(); ?>
<div class="container">
    <div class="main-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-article">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <!-- 分类：<?php the_category(); ?> -->
                    <h3><?php the_content(); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class=”post”>
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="single-pagination">
            上一篇：<?php previous_post_link('%link') ?> 下一篇：<?php next_post_link('%link') ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>