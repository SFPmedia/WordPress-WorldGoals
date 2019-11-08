<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header class="sc_header">
        <?php if ( get_header_image() ) : ?>
            <div id="site-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img class="sc_cover" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
                <div class="header-content">
                    <div class="">
                        <h1 class="site-title"><?php bloginfo ('name');?></h1>
                        <h2 class="site-description"><?php bloginfo ('description');?></h2>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="mainnav">
            <?php wp_nav_menu(array('theme_location'=>'primary')) ?>
        </div>

        <div class="mobilenav">
            <?php wp_nav_menu(array('theme_location'=>'secondary')) ?>
        </div>
    </header>