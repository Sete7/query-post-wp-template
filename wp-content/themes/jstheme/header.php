<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//PT-BR" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="PT" lang="PT">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template wp-junio</title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- CONTENT -->
        <div class="content">
            <header class="header">
                <div class="topo">
                    <!-- LOGO -->
                    <div class="logo">
                        <h1>
                            <a href="<?php echo get_option('home'); ?>" title="Página Inicial" alt="Página Inicial">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-junio.png" alt="Logo Junio">
                            </a>
                        </h1>
                    </div>
                    <!-- END LOGO -->

                    <!-- SEARCH -->
                    <div class="search">
                        <?php get_search_form(); ?>
                    </div>
                    <!-- END SEARCH -->
                </div>
                <!-- NAVBAR -->
                <nav class="navbar  ">
                    <ul class="menu">
                        <li class="link_">
                            <a href="<?php echo get_option('home'); ?>" title="Página Inicial">HOME</a>
                        </li>
                        <li class="link_">
                        <a href="http://localhost/sites/tema00/sobre-nos/">SOBRE NÓS</a>
                    </li>
                    <li class="link_">
                        <a href="<?php echo get_option('home'); ?>/category/esportes">ESPORTES</a>
                    </li>
                    <li class="link_">
                        <a href="<?php echo get_option('home'); ?>/category/moda">MODA</a>
                    </li>
                    <li class="link_">
                        <a href="<?php echo get_option('home'); ?>/fale-conosco">FALE CONOSCO</a>
                    </li>
                        <!--<li>-->
                            <?php
//                            wp_list_pages('title_li=&exclude=2&sort_column=menu_order'); 
                            ?>
                        <!--</li>-->
                    </ul>
                </nav>
                <!-- END NAVBAR -->
            </header>
            <!-- END HEADER -->