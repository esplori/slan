<?php get_header(); ?>
<div class="container">
    <div class="main-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h3><?php the_excerpt(); ?></h3>
                <?php the_category(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <div class=”post”>
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="pagination">
            <?php posts_nav_link('between', '上一页', '下一页'); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>