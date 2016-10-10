<?php get_header() ; /* Template Name: Страница Производители */ ?>
<div class="page-producters wrap hor-wrap">
    <div class="dis-flex justify-content-end flex-wrap-wrap">
        <?php if(have_rows('производитель')): ?>
        <?php while(have_rows('производитель')): the_row(); ?>
        
        <article class="producter dis-flex col-4-6 wow hide fadeIn">
            <div class="producter-image">
                <img src="<?php the_sub_field('логотип'); ?>" title="<?php the_sub_field('название'); ?>">
            </div>
            <div class="dis-flex justify-content-end flex-wrap-wrap">
                <div class="col-4-6 producter-desc text-block padding-r-30">
                    <h2 class="katalog-beer-title"><?php the_sub_field('название'); ?></h2>
                    <?php the_sub_field('краткое_описание'); ?>
                    <a href="<?php the_sub_field('ссылка'); ?>" class="button margin-t-24">узнать больше</a>
                </div>
                <div class="col-2-6 producter-goods text-block padding-l-30">
                    <ul>
                        <li>
                            <div class="producter-goods-title">
                                Страна
                            </div>
                            <div class="producter-goods-sort"><?php the_field('страна'); ?></div>
                        </li>
                        <li>
                            <div class="producter-goods-title">
                                Год основания
                            </div>
                            <div class="producter-goods-sort"><?php the_field('год_основания'); ?></div>
                        </li>
                        <li>
                            <div class="producter-goods-title">
                                Директор
                            </div>
                            <div class="producter-goods-sort"><?php the_field('директор'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
     
<?php get_footer(); ?>