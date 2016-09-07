<footer id="footer">
    <div class="wrap hor-wrap dis-flex flex-wrap-wrap">
        <div class="col-1-6">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg"></a>
        </div>
        <div class="col-5-6">
            <div class="dis-flex flex-wrap-wrap justify-content-between full-height align-items-end">
                <div class="col-1-6">
                    <div class="margin-b-30">
                        <div class="margin-b-6"><a href="#" class="color-white">8 800 123 23 23</a></div>
                        <div class="margin-b-6"><a href="#" class="color-white">hello@beerdiller.ru</a></div>
                    </div>
                    <ul class="footer-nav">
                        <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
                    </ul>
                </div>
                <div class="col-1-6">
                    <ul class="footer-nav">
                        <?php echo do_shortcode('[widget id="nav_menu-3"]'); ?>
                    </ul>
                </div>
                <div class="col-1-6 footer-social">
                    <ul class="dis-flex">
                        <li>
                            <a href="https://vk.com/p.motion" target="_blank">
                                <img src="http://p-motion.ru/wp-content/themes/p-motion/assets/images/icons/vk.svg">
                            </a>
                        </li>
                        <li>
                            <a href="https://vk.com/p.motion" target="_blank">
                                <img src="http://p-motion.ru/wp-content/themes/p-motion/assets/images/icons/vk.svg">
                            </a>
                        </li>
                        <li>
                            <a href="https://vk.com/p.motion" target="_blank">
                                <img src="http://p-motion.ru/wp-content/themes/p-motion/assets/images/icons/vk.svg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1-6">
                    <a href="#" class="color-white">P.Motion</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="callback">
    
</div>
<!-- scripts connect -->
<?php wp_footer(); ?>
</body>
</html>