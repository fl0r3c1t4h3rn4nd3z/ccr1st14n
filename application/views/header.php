<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Identifik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fantastico Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url('assets/') ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('assets/') ?>css/style.css" rel='stylesheet' type='text/css' />
        <script src="<?php echo base_url('assets/') ?>js/jquery-1.11.0.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });</script>
        <!--start-smoth-scrolling-->
        <!--start-top-nav-script-->
        <script>
            $(function () {
                var pull = $('#pull');
                menu = $('nav ul');
                menuHeight = menu.height();
                $(pull).on('click', function (e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function () {
                    var w = $(window).width();
                    if (w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });</script>
        <!--End-top-nav-script-->
    </head>
    <body>
        <!--start-header-->
        <div class="header" id="home">
            <div class="container">
                <div class="head">
                    <div class="logo">
                        <a href="index.html"><p style="font-weight:bold;color:#FFF;">IDENTIFIK S.A.S.</p></a>
                    </div>
                    <div class="navigation">
                        <span class="menu"></span> 
                        <ul class="navig">
                            <li><a href="<?php echo base_url('index.php/bienvenido') ?> "  <?php echo $page === 'home' ? 'class="active"' : '' ?> >Inicio</a></li>
                            <li><a href="<?php echo base_url('index.php/bienvenido/nosotros') ?>"  <?php echo $page === 'no' ? 'class="active"' : '' ?>>Sobre Nosotros</a></li>
                            <li><a href="<?php echo base_url('index.php/bienvenido/servicios') ?>"  <?php echo $page === 'features' ? 'class="active"' : '' ?>>Servicios</a></li>
                            <li><a href="<?php echo base_url('index.php/bienvenido/broshure') ?>"  <?php echo $page === 'brochure' ? 'class="active"' : '' ?>>Portafolio</a></li>
                            <!--<li><a href="404.html">Suport</a></li>-->
                            <li><a href="<?php echo base_url('index.php/bienvenido/contact') ?>" <?php echo $page === 'contact' ? 'class="active"' : '' ?> >Contacto</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>	
        <!-- script-for-menu -->
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function () {
                $(" ul.navig").slideToggle("slow", function () {
                });
            });</script>
        <!-- script-for-menu -->
