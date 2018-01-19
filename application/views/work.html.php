<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Identifik - Portafolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fantastico Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="./js/ui/jquery-ui.theme.css" rel='stylesheet' type='text/css' />
        <link href="./js/ui/jquery-ui.structure.css" rel='stylesheet' type='text/css' />
        <script src="js/jquery-1.11.0.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!---- start-smoth-scrolling---->
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>

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

                $("#dialog").dialog({
                    autoOpen: false,
                    modal: true
                });

                $('.link-top').click(function (e) {
                    var titulo = $(this).find(".titulo").val();
                    var imagen = $(this).find(".imagen").val();
                    var descripcion = $(this).find(".descripcion").val();
                    $("#dialog table tr td img").attr('src', $(e.target).attr(''));
                    $("#dialog table tr td img").attr('src', imagen);
                    $("#dialog").dialog('option', 'title', titulo);
                    $("#dialog").dialog("option", "width", 800);

                    $("#dialog table tr td p").text(descripcion);
                    $("#dialog").dialog("open");
                });

                 $(".ui-widget-overlay").click(function () {
                   $("#dialog").dialog("close");
                });

            });
               </script>
        <style>
            .ui-dialog {
                background: #FFF;

            }
            #dialog{
                overflow:hidden;
            }

        </style>
        <!--End-top-nav-script-->
    </head>
    <body>
        <!--<?php
//if (! defined('NOREQUIREUSER'))  define('NOREQUIREUSER','1');
//if (! defined('NOREQUIREDB'))    define('NOREQUIREDB','1');
//if (! defined('NOREQUIRESOC'))   define('NOREQUIRESOC','1');
//if (! defined('NOREQUIRETRAN'))  define('NOREQUIRETRAN','1');
//if (! defined('NOCSRFCHECK'))    define('NOCSRFCHECK','1');			// Do not check anti CSRF attack test
//if (! defined('NOSTYLECHECK'))   define('NOSTYLECHECK','1');			// Do not check style html tag into posted data
//if (! defined('NOTOKENRENEWAL')) define('NOTOKENRENEWAL','1');		// Do not check anti POST attack test
//if (! defined('NOREQUIREMENU'))  define('NOREQUIREMENU','1');			// If there is no need to load and show top and left menu
//if (! defined('NOREQUIREHTML'))  define('NOREQUIREHTML','1');			// If we don't need to load the html.form.class.php
//if (! defined('NOREQUIREAJAX'))  define('NOREQUIREAJAX','1');
        if (!defined("NOLOGIN"))
            define("NOLOGIN", '1');    // If this page is public (can be called outside logged session)
// Change this following line to use the correct relative path (../, ../../, etc)
        $res = 0;
        //$dol_main = "../dolibarr-3.8.0/htdocs/main.inc.php";
        $dol_main = "../admin/htdocs/main.inc.php";
        if (!$res && file_exists($dol_main)) {
            $res = @include $dol_main;
        }
        if (!$res)
            die("Include of main fails");
        dol_include_once('/categories/class/categorie.class.php');
        $URL_IMG = './viewimage.php?modulepart=produit&cache=1&out=client&file=';
        $categorias = new Categorie($db);
        ?>-->
        <div id="dialog" style="display: none;" title="T&iacute;tulo del popup">
            <table width="100%"><tr><td><img src="" /></td><td style="text-align:left;margin: 20px;"><p style="margin: 20px;color:#000;font-size: x-small; "/></td></tr></table>
        </div>
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

                            <li><a href="index.html.php">Inicio</a></li>
                            <li><a href="about.html"  >Sobre Nosotros</a></li>
                            <li><a href="features.php.html">Servicios</a></li>
                            <li><a href="work.html.php" class="active">Portafolio</a></li>
                            <!--<li><a href="404.html">Suport</a></li>-->
                            <li><a href="contact.html">Contacto</a></li>
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
        <script>

        </script>
        <!--start-work-->
        <div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
            <div class="container">
                <div class="portfolio-top">
                    <h3>Portafolio</h3>
                </div>
                <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });</script>
                <link rel="stylesheet" href="css/swipebox.css">
                <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">

            jQuery(function ($) {
                (".swipebox").swipebox();
            });

                </script>
                <!-- Portfolio Ends Here -->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">

                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Todas Las Categorias</span></li>
                            <?php foreach ($categorias->get_all_categories(0) as $c) : ?>
                                <li class="resp-tab-item" aria-controls="tab_item-<?php print $c->id; ?>" role="tab"><span><?php print $c->description ?></span></li> 
                            <?php endforeach; ?>

                            <div class="clearfix"></div>
                        </ul>				  	 
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="tab_img">                                    
                                    <?php foreach ($categorias->get_all_categories(0) as $c) : ?>
                                        <?php
                                        $categorias->fetch('', $c->label);
                                        $array = $categorias->getObjectsInCateg('product');

                                        foreach ($array as $p) :
                                            if ($p->status == 1):
                                                $dir = $URL_IMG . urlencode('/' . $p->ref . '/foto.jpg');
                                                ?>
                                                <div class="col-md-4 img-top ">
                                                    <h4><?php print $p->label ?></h4>
                                                    <a style="cursor: move"  rel="title" class="b-link-stripe b-animate-go  swipebox">
                                                        <img  src="<?php print $dir; ?>" class="img-responsive" alt="<?php print $p->description ?>"/>
                                                        <div  class="link-top"  >
                                                            <p style="color:#FFF;"><?php print substr($p->description, 0, 400);
                                    print (strlen($p->description) >= 400 ? '...' : '') ?></p>
                                                            <input class="titulo" type="hidden" value="<?php print $p->label ?>" />
                                                            <input class="descripcion" type="hidden" value="<?php print $p->description ?>" />
                                                            <input class="imagen"type="hidden" value="<?php print $dir; ?>" />
                                                        </div>
                                                    </a>
                                                </div>
                                                <?php
                                            endif;
                                        endforeach;
                                    endforeach;
                                    ?>
                                    <div class="clearfix"></div>	
                                </div>	 	        					 
                            </div>
                            <?php foreach ($categorias->get_all_categories(0) as $c) : ?>
                                <?php
                                $categorias->fetch('', $c->label);
                                $array = $categorias->getObjectsInCateg('product');
                                ?>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-<?php print $c->id ?>">
                                    <?php
                                    foreach ($array as $p) :
                                        if ($p->status == 1):
                                            $dir = $URL_IMG . urlencode('/' . $p->ref . '/foto.jpg');
                                            ?>
                                            <div class="col-md-4 img-top ">
                                                <h4><?php print $p->label ?></h4>
                                                <a style="cursor: move"  rel="title" class="b-link-stripe b-animate-go  swipebox">
                                                    <img src="<?php print $dir; ?>" class="img-responsive" alt=""/>
                                                    <div class="link-top">

                                                        <p style="color:#FFF;"><?php print substr($p->description, 0, 400);
                                            print (strlen($p->description) >= 400 ? '...' : '') ?></p>
                                                        <input class="titulo" type="hidden" value="<?php print $p->label ?>" />
                                                        <input class="descripcion" type="hidden" value="<?php print $p->description ?>" />
                                                        <input class="imagen"type="hidden" value="<?php print $dir; ?>" />
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        endif;
                                    endforeach;
                                    ?>
                                    <div class="clearfix"></div>	
                                </div>
<?php endforeach; ?>

                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!--end-work-->
        <!--start-footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-left">
                        <div class="footer-text">
                            <a href="about.html">ABOUT</a>
                            <ul>
                                <li><a id="abrir" >- Lorem ipsum</a></li>
                                <li><a href="#">- Dolor sit amet</a></li>
                                <li><a href="#">- Nullam sed </a></li>
                                <li><a href="#">- Integer sagttis eget</a></li>
                            </ul>
                        </div>
                        <div class="footer-text">
                            <a href="features.php.html">FEATURES</a>
                            <ul>
                                <li><a href="#">- Lorem ipsum</a></li>
                                <li><a href="#">- Dolor sit amet</a></li>
                                <li><a href="#">- Nullam sed </a></li>
                                <li><a href="#">- Integer sagttis eget</a></li>
                            </ul>
                        </div>
                        <div class="footer-text">
                            <a href="work.html">WORK</a>
                            <ul>
                                <li><a href="#">- Lorem ipsum</a></li>
                                <li><a href="#">- Dolor sit amet</a></li>
                                <li><a href="#">- Nullam sed </a></li>
                                <li><a href="#">- Integer sagttis eget</a></li>
                            </ul>
                        </div>
                        <div class="footer-text">
                            <a href="404.html">SUPPORT</a>
                            <ul>
                                <li><a href="#">- Lorem ipsum</a></li>
                                <li><a href="#">- Dolor sit amet</a></li>
                                <li><a href="#">- Nullam sed </a></li>
                                <li><a href="#">- Integer sagttis eget</a></li>
                            </ul>
                        </div>
                        <div class="footer-text">
                            <a href="contact.html">CONTACT</a>
                            <ul>
                                <li><a href="#">- Lorem ipsum</a></li>
                                <li><a href="#">- Dolor sit amet</a></li>
                                <li><a href="#">- Nullam sed </a></li>
                                <li><a href="#">- Integer sagttis eget</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right">
                        <ul>
                            <li><a href="#"><span class="fb"> </span></a></li>
                            <li><a href="#"><span class="twt"> </span></a></li>
                            <li><a href="#"><span class="in"> </span></a></li>
                            <li><a href="#"><span class="be"> </span></a></li>
                            <li><a href="#"><span class="drbl"> </span></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="footer-bottom">
                        <p> © 2015 Fantastico. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear' 
                     };
                     */

                    $().UItoTop({easingType: 'easeOutQuart'});
                });
            </script>
            <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>	
        <!--end-footer-->					 
    </body>
</html>
