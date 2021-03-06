<!DOCTYPE html>
<html>
    <head>
        <link href="//fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,700italic" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mcw.css">
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scaleable=0; maximum-scale=1;">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="container container_state_nav">
                <nav>
                    <ul class="nav-menu">
                        <li class="nav-menu__item"><a href="/" class="nav-menu__item__link nav-menu__item__link_state_current">weblog</a></li>
                        <!-- <li class="nav-menu__item"><a href="/archiv" class="nav-menu__item__link">archiv</a></li> -->
                        <li class="nav-menu__item"><a href="http://fotos.madcatswelt.org/" class="nav-menu__item__link">fotos</a></li>
                    </ul>
                </nav>
                <p class="header__title">
                    <a href="/" class="header__title__link"><?php bloginfo('name'); ?></a>
                </p>
            </div>
        </header>
        <div class="container container_state_main">
            <main class="content">