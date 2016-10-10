<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<section class="single-page wow hide fadeInUp" data-wow-delay="0.3s">
    <div class="wrap hor-wrap">
        <div class="dis-flex justify-content-center">
            <header class="single-header col-2-6 text-center">
                <h1 class="single-header-title"><?php the_title(); ?></h1> 
                <div class="single-header-date"><small><?php the_date(); ?></small></div>
                <div class="single-header-excerpt text-block"><?php the_excerpt(); ?></div>
                <div class="single-header-social">
                    <div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="common" data-share-style="6" data-mode="share" data-like-text-enable="false" data-mobile-view="false" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round" data-sn-ids="fb.vk.tw.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1575664" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="true" class="uptolike-buttons" ></div>
                </div>
            </header>
        </div>
        <div class="dis-flex justify-content-end">
            <section class="post-content col-4-6">
                <div class="post-content-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-content-text text-block">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
        
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>