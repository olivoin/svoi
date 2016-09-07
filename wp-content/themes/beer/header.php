<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="Keywords" content="<?php the_field('ключевые_слова'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div class="wrap hor-wrap dis-flex justify-content-between align-items-center flex-wrap-wrap">
        <div class="header-logo">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg"></a>
        </div>
        <div class="header-nav dis-flex align-items-center">
            <?php echo do_shortcode('[widget id="nav_menu-4"]'); ?>
            <button type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
                <span class="tcon-menu__lines" aria-hidden="true"></span>
            </button>
        </div>  
    </div>
</header>