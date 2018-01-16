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
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>A2Z a Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="a2z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //for-mobile-apps -->
        <link href="<?php echo base_url('assets/a2z/') ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--banner slider  -->
        <link href="<?php echo base_url('assets/a2z/') ?>css/JiSlider.css" rel="stylesheet">
        <!-- //banner-slider -->
        <link href="<?php echo base_url('assets/a2z/') ?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('assets/a2z/') ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

    </head>

    <body>
        <!-- header -->
        <div class="w3layouts-header">
            <div class="container">

                <div class="logo-nav-agileits">
                    <div class="logo-nav-left">
                        <h1>
                            <a href="index.html">
                                <span class="fa fa-home"></span><?php print $this->lang->line('a2z')?>
                                <span class="logo-title"><?php print $this->lang->line('homeservices')?></span>
                            </a>
                        </h1>
                    </div>

                    <div class="header-grid-left-wthree">
                        <div class="h3-title">
                            <h3><?php print $this->lang->line('contactus')?></h3>
                        </div>
                        <ul>
                            <li>
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                                <a href="mailto:<?php print $this->lang->line('info@example.com')?>"><?php print $this->lang->line('a2zservices.com')?></a>
                            </li>
                            <li>
                                <span class="fa fa-phone" aria-hidden="true"></span><?php print $this->lang->line('tel2')?></li>
                            <li>
                                <span class="fa fa-mobile" aria-hidden="true"></span><?php print $this->lang->line('tel1')?>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                                <span class="sr-only"><?php print $this->lang->line('Togglenavigation')?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.html"><?php print $this->lang->line('Home')?></a>
                                </li>
                                <li>
                                    <a href="about.html"><?php print $this->lang->line('aboutus')?></a>
                                </li>
                                <li>
                                    <a href="services.html">services<?php print $this->lang->line('services')?></a>
                                </li>
                                <li>
                                    <a href="projects.html"><?php print $this->lang->line('projects')?></a>
                                </li>
                                <li>
                                    <a href="plan.html"><?php print $this->lang->line('plans')?></a>
                                </li>
                                <li>
                                    <a href="contact.html"><?php print $this->lang->line('contactus')?></a>
                                </li>
                                <li>
                                    <a href="status.html"><?php print $this->lang->line('trackservicestatus')?></a>
                                </li>
                                <li class="s-bar">
                                    <div class="search-w3_agileits">
                                        <input class="search_box" type="checkbox" id="search_box">
                                        <label class="icon-search" for="search_box">
                                            <span class="fa fa-search" aria-hidden="true"></span>
                                        </label>
                                        <div class="search_form">
                                            <form action="#" method="post">
                                                <input type="search" name="Search" placeholder=" " />
                                                <input type="submit" value="Search">
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
