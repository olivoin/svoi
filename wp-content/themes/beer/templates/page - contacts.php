<?php get_header() ; /* Template Name: Страница Контакты */ ?>
<div class="page-contacts wrap hor-wrap">
    <div class="dis-flex justify-content-center flex-wrap-wrap wow hide fadeIn">
        <article class="margin-b-40 col-4-6">
            <div class="section-title">
                <h2>Контакты</h2>
            </div> 
            <div class="dis-flex flex-wrap-wrap">
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">По всем вопросам:</div>
                    <ul>
                        <li>+7 (495) 111-94-50</li>
                        <li>sale@beerdealer.ru</li>
                    </ul>
                </div>
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">Адрес</div>
                    <ul>
                        <li>г.Москва, ул. Маломосковская 22,<br>стр. 1, цокольный этаж</li>
                    </ul>
                </div>
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">Мы в соц.сетях:</div>
                    <ul class="dis-flex">
                        <li class="margin-r-10">
                            <a href="https://vk.com/beerdealer" target="_blank">
                                <img src="http://p-motion.ru/wp-content/themes/p-motion/assets/images/icons/vk.svg">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/beerdealer.ru/" target="_blank">
                                <img src="http://p-motion.ru/wp-content/themes/p-motion/assets/images/icons/insta.svg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="margin-b-40 col-4-6">
            <div class="dis-flex">
                
                <div class="col-3-6">
                    <div class="margin-b-30 f-size-20">Форма обратной связи:</div>
                    <div class="text-block">
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Форма обратной связи"]'); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
     
<?php get_footer(); ?>