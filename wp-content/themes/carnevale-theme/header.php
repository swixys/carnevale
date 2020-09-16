<!DOCTYPE html>
<html lang="en" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon">
    <title>Carnevale <?php wp_title(); ?></title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/scripts/embed.videos.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/scripts/jquery.jold.js-load-video.js"></script>
    <?php wp_head(); ?>
</head>
<body class="page__body">
<header class="header">
    <div class="header__menu dark">
        <div class="header__menu-container">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/carnevale-logo-desktop.svg" alt="logo" class="logo__image">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/carnevale-logo-reversed.svg" alt="logo" class="logo__image--dark">
                </a>
            </div>
            <nav class="menu">
                <button
                        class="menu__button"
                        aria-expanded="false"
                        aria-controls="menu__list"
                >
                    <img
                            src="<?php echo bloginfo('template_url'); ?>/assets/icons/menu-icon-close.svg"
                            aria-hidden="true"
                            class="menu__button--open"
                    >
                    <img
                            src="<?php echo bloginfo('template_url'); ?>/assets/icons/menu-icon.svg"
                            aria-hidden="true"
                            class="menu__icon menu__button--close "
                    >
                    <img
                            src="<?php echo bloginfo('template_url'); ?>/assets/icons/menu-icon-dark.svg"
                            aria-hidden="true"
                            class="menu__icon-dark menu__button--close "
                    >
                </button>
                <div class="menu__wrapper">
                    <?php
                    wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => 'header-menu',
                        'container'       => false,
                        'menu_class'      => 'menu__list',
                        'menu_id'         => 'menu__list',
                    ] );
                    ?>
                    <ul class="menu__social">
                        <li class="menu__social-item">
                            <a href="http://www.facebook.com/carnevaleco" class="social-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook.svg" alt="facebook" class="inactive">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook-hover.svg" alt="facebook" class="hover">
                            </a>
                        </li>
                        <li class="menu__social-item">
                            <a href="https://www.instagram.com/carnevale_co" class="social-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" class="inactive">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram-hover.svg" alt="instagram" class="hover">
                            </a>
                        </li>
                        <li class="menu__social-item">
                            <a href="https://www.linkedin.com/company/carnevale/" class="social-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in.svg" alt="linkedin" class="inactive">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in-hover.svg" alt="linkedin" class="hover">
                            </a>
                        </li>
                        <li class="menu__social-item">
                            <a href="https://twitter.com/carnevale_co" class="social-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg" alt="twitter" class="inactive">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter-hover.svg" alt="twitter" class="hover">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>