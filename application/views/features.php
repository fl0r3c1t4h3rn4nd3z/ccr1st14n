<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--start-features-->
<div class="features">
    <div class="container">
        <div class="features-main">
            <h3>Features</h3>
            <div class="feature-top">
                <?php $i = 1;
                  $servicios=  array_reverse($servicios);
                ?>
                  <div class="feature-one">
                <?php foreach ($servicios as $s): ?>                   
                        <div class="col-md-4 features-left">
                            <img src=" <?php echo $s['img'] ?>" alt="" />
                            <h4><?php echo $s['title'] ?></h4>
                            <p><?php echo $s['text'] ?></p>
                            <a href=" <?php echo $s['url'] ?>" >Ver mas</a>
                        </div>
                    <?php if ($i%3=== 0): ?>
                            <div class="clearfix"></div>
                        </div>
                          <div class="feature-one">
                    <?php endif; ?>
                 <?php $i++ ?>
                <?php endforeach; ?>
                               <div class="clearfix"></div>
                        </div>
                <!--                <div class="feature-one">
                                    <div class="col-md-4 features-left">
                                        <img src="images/qrcode.png" alt="" />
                                        <h4>Codigos 1D y 2D</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/clock-1.png" alt="" />
                                        <h4>Optimice Sus Procesos</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/settings.png" alt="" />
                                        <h4>Desarrollo A Medida</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="feature-one">
                                    <div class="col-md-4 features-left">
                                        <img src="images/port.png" alt="" />
                                        <h4>ERP</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/counter.png" alt="" />
                                        <h4>Gestione Sus Ventas</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/code-1.png" alt="" />
                                        <h4>Software</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="feature-one">
                                    <div class="col-md-4 features-left">
                                        <img src="images/male.png" alt="" />
                                        <h4>CRM</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/test.png" alt="" />
                                        <h4>Inovación</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                        <a href="#">Ver mas</a>
                                    </div>
                                    <div class="col-md-4 features-left">
                                        <img src="images/speech.png" alt="" />
                                        <h4>Testimonios</h4>
                                        <p>Quisque lobortis venenatis augue, id pellentesque justo pretium at. Vivamus laoreet urna mi.</p>
                                    </div>-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--start-features-->
