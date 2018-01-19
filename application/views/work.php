
<!--start-work-->
<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
    <div class="container">
        <div class="portfolio-top">
            <h3>Portafolio</h3>
        </div>
        <script src="<?php echo base_url('assets/') ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px

                    fit: true, // 100% fit in a container
                    click: function (event, tab) {
                        console.log(tab);
                    }
                    // closed: true
                });

//                $('#<?php echo $catid ?>').click();
//                $("li").click(function () {
//                    $(this).children("a").click();
//                });
            });</script>
        <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/swipebox.css">
        <script src="<?php echo base_url('assets/') ?>js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">


//            jQuery(function ($) {
//                (".swipebox").swipebox();
//            });

        </script>
        <!-- Portfolio Ends Here -->
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="nav nav-tabs ">

                    <li id="0" class="resp-tab-item" aria-controls="tab_item-0" role="tab"><a href="<?php echo base_url('index.php/bienvenido/portafolio') ?>" style="color: inherit;">Todas Las Categorias</a></li>
                    <?php foreach ($categorias as $c) : ?>
                        <li  id="<?php echo $c['id'] ?>" class="resp-tab-item"aria-controls="tab_item-<?php print $c['id']; ?>" role="tab"><a href="<?php echo base_url('index.php/bienvenido/portafolio/' . $c['id']) ?>" style="color: inherit;"><?php print $c['label'] ?></a></li> 
<?php endforeach; ?>

                    <div class="clearfix"></div>
                </ul>				  	 
                <div class="tab-content">
                    <div class="tab-pane fade in active" aria-labelledby="tab_item-<?php echo $catid?>">
                        <div class="tab_img">                                    
                              <?php foreach ($productos as $p) : ?>
                            <div class="col-md-4 img-top ">
                                <h4><?php print $p['label'] ?></h4>
                                <a style="cursor: move"  rel="title" class="b-link-stripe b-animate-go  swipebox">
                                    <img  src="<?php print $p['images'][0]; ?>" class="img-responsive" alt="<?php print $p['description'] ?>"/>
                                    <div  class="link-top"  >
                                        <p style="color:#FFF;"><?php
                                            print substr($p['description'], 0, 300);
                                            print (strlen($p['description']) >= 300 ? '...' : '')
                                            ?></p>
                                        <input class="titulo" type="hidden" value="<?php print $p['label'] ?>" />
                                        <input class="descripcion" type="hidden" value="<?php print $p['description'] ?>" />
                                        <input class="imagen"type="hidden" value="" />
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>	
                        </div>	 	        					 
                    </div>



                </div>	
            </div>
        </div>
    </div>
</div>
<!--end-work-->
