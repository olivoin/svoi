<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="Keywords" content="<?php the_field('ключевые_слова'); ?>">
<?php wp_head(); ?>
<script>
    jQuery(window).on('load', function () {
    var $preloader = jQuery('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
    setTimeout(function(){
        wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       150,        // default 
                mobile:       true,       // default
                live:         true        // default
            }
        )
        wow.init();
    }, 200);
    });
</script>
</head>
<body <?php body_class(); ?>>
<div id="page-preloader">
    <div class="spinner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/preload.gif">
    </div>
</div>
<header id="header" class="wow hide fadeInUp">
    <div class="wrap hor-wrap dis-flex justify-content-between align-items-center flex-wrap-wrap">
        <div class="col-3-6 dis-flex align-items-center">
            <div class="header-logo">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg"></a>
            </div>
            <div class="header-contacts">
                8925-123-45-67
            </div>
            <div class="header-callback">
                написать нам
            </div>
        </div>
        <div class="header-nav col-3-6 dis-flex justify-content-end align-items-center">
            <nav class="header-nav-menu">
                <?php echo do_shortcode('[widget id="nav_menu-4"]'); ?>
            </nav>
            <button type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
                <span class="tcon-menu__lines" aria-hidden="true"></span>
            </button>
        </div>  
    </div>
</header>