<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
        <title>Hotel Paraiso Dorado</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo hidden-xs">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                   <div class="top">
                       <img src="" alt="">
                   </div>
                    <div class="bottom">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd active">INICIO</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#servicios" class="smoothScroll vertical-align nav-padd">SERVICIOS</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#instalaciones" class="smoothScroll vertical-align nav-padd">INSTALACIONES</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#tarifas" class="smoothScroll vertical-align nav-padd">TARIFAS Y PROMOCIONES</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#localizacion" class="smoothScroll vertical-align nav-padd">LOCALIZACION</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#reservaciones" class="smoothScroll vertical-align nav-padd">INFORMES Y RESERVACIONES</a></li>
                            <li><a href="<?php if($page != 'index') { echo 'index'; }?>#blog" class="smoothScroll vertical-align nav-padd">BLOG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>