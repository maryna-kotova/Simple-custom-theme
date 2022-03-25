<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title() ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="mk-header-top">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>
    <div class="mk-header-menu menu">
        <div class="mk-menu-icon-box">
            <div class="mk-menu-icon">
                <span></span>
            </div>
        </div>
        <div class="mk-menu-body">
            <?php
            if ( has_nav_menu( 'head_menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'head_menu',
                    'container'      => false,
                    'menu_class'     => 'mk-navbar',
                    'debth'          => 2,
                ) );
            }
            ?>
        </div>
    </div>
</div>
