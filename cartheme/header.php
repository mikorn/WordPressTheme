<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <div class="wrap-site">

        <header class="site-header">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'cartheme' ); ?>">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Открыть меню</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= get_home_url(); ?>">
                            <img src="<?= esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php if ( has_nav_menu( 'primary' ) ) :
				            wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu nav navbar-nav',
							 ) );
						endif; ?>
                        <div class="navbar-text navbar-right">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                            <?php dynamic_sidebar( 'header-widget' ); ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="site-content">