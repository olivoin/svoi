<?php get_header(); /* Template Name: Страница Каталог */ ?>
<section class="katalog-page">
    <div class="wrap hor-wrap">
        <div class="dis-flex flex-wrap-wrap">
            <aside class="katalog-filter col-2-6 wow hide fadeInUp">
                <div class="katalog-filter-title">
                    <span class="wow hide fadeInUp" data-wow-delay="0.3s">фильтр</span>
                </div>
                <div class="filter-list wow hide fadeInLeft">
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                </div> 
            </aside>
            <div class="katalog-wrapper col-4-6 wow hide fadeInUp">
                <?php woocommerce_content(); ?> 
            </div>
            
        </div>
        <div class="dis-flex justify-content-end">
            <div class="katalog-page-content text-block col-4-6">
                <?php the_field('текст'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>