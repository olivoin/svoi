<?php get_header(); ?>
<section class="news-page wow hide fadeInUp">
    <div class="wrap hor-wrap">
        <div class="dis-flex flex-wrap-wrap">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <article <?php post_class(array('col-1-6')); ?>>
                <header class="post-header">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300,300)); ?></a>
                    <h3 class="post-header-title"><?php the_title(); ?></h3>
                </header>
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>