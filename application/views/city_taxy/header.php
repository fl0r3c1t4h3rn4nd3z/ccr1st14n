<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

    <head>
        <title>Don Reparador Popayan</title>
        <link href="<?php print base_url('assets/city_taxy/') ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="<?php print base_url('assets/city_taxy/') ?>css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script src="<?php print base_url('assets/city_taxy/') ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php print base_url('assets/city_taxy/') ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php print base_url('assets/city_taxy/') ?>js/camera.min.js"></script>
        <script type="text/javascript">
            jQuery(function () {
                jQuery('#camera_wrap_1').camera({
                    height: '500px',
                    pagination: false,
                });
            });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1200);
                });
            });
        </script>
    </head>

    <body>
        <!---strat-wrap----->

        <!---strat-header----->
        <div class="header" id="top">
            <div class="wrap">
                <!---start-logo---->
                <div class="logo">
                    <a href="index.html"><img src="<?php print base_url('assets/city_taxy/') ?>images/logo_1.png" title="logo" /></a>
                </div>
                <!---End-logo---->
                <!---start-top-nav---->
                <div class="top-nav">
                    <ul>
                        <li class="active"><a href="<?php print site_url('welcome/index')?>"><?php print $this->lang->line('home')?></a></li>
                        <li><a href="<?php print site_url('welcome/about')?>">Quienes Somos</a></li>
<!--                        aca es la para url de otras-->
                        
                        <li><a href="whatwe.html">What we do</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
                <!---End-top-nav---->
            </div>
        </div>
        <!---End-header----->
