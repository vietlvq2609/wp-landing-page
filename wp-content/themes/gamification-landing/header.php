<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <nav class="header__nav">
            <a href="/" class="header__logo">
                <img src="<?php echo esc_url(get_theme_mod('logo', get_template_directory_uri() . '/assets/images/servier.jpg')); ?>" alt="Site Logo" />
            </a>
            <div class="header__buttons">
                <button class="header__button header__button--outlined">đăng nhập</button>
                <button class="header__button header__button--filled">đăng ký</button>
            </div>
        </nav>
    </header>