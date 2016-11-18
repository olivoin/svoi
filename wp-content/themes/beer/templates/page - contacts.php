<?php get_header() ; /* Template Name: Страница Контакты */ ?>
<div class="page-contacts wrap hor-wrap">
    <div class="dis-flex justify-content-center flex-wrap-wrap wow hide fadeIn">
        <article class="margin-b-40 col-4-6">
            <div class="section-title">
                <h2>Контакты</h2>
            </div> 
            <div class="dis-flex flex-wrap-wrap">
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">Доставка:</div>
                    <ul>
                        <li>+7 (963) 787-32-89</li>
                    </ul>
                </div>
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">Бронь столов:</div>
                    <ul>
                        <li>+7 (963) 787-32-89</li>
                    </ul>
                </div>
                <div class="col-2-6">
                    <div class="margin-b-10 f-size-20">Жалобы и предложения:</div>
                    <ul>
                        <li>+7 (926) 400-07-88</li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="margin-b-40 col-4-6">
            <div class="dis-flex">
               <div class="col-2-6">
                    <ul>
                        <li>hello@svoi.bar</li>
                    </ul>
                    <ul class="dis-flex">
                        <li>
                            <a href="https://vk.com/barsvoi" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/vk.svg" class="svg">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/svoi.bar/" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/insta.svg" class="svg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="margin-b-40 col-4-6">
            <div class="section-title">
                <h2>Как нас найти</h2>
            </div> 
            <div class="dis-flex flex-wrap-wrap">
               <div class="col-3-6">
                    <ul>
                        <li>Россия, Сергиев Посад, д.9/26, Рыбная 1-я ул.</li>
                    </ul>
                </div>
                <div class="full-width margin-t-40">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=lYq2iWRYkhmHMxYssAjYyjbNz3KuQAlj&amp;width=100%&amp;height=430&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                </div>
            </div>
        </article>
    </div>
</div>
     
<?php get_footer(); ?>