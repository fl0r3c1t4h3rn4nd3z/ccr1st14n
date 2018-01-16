<!--start-banner-->
<div class="banner">
    <div class="container">
        <div class="banner-main">
            <div class="col-md-4 banner-left hei " >


                <h2>&nbsp;</h2>


                <iframe frameBorder="0" height="200px" src="<?php echo base_url('assets/Barcode_Clock/launch_small.html') ?>" >

                </iframe>

            </div>
            <div class="col-md-8 banner-right">
                <h1>BIENVENIDO</h1>
                <h2>Innovando segundo a segundo en identificación y sistematización.</h2>
                <p></p>
                <div class="b-btn">
                    <ul>
                        <li><a href="contact.html" class="contact">Contactenos</a> <span> o </span></li>
                        <li><a href="work.html.php" class="work">Vea nuestro portafolio</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-banner-->
<!--start-client-->	
<div class="client">
    <div class="container">
        <div class="client-main">
            <ul>
                <li ><img src="images/logo2.png"  width ="100" alt="" /></li>
                <li><img src="images/logo2.png" width ="100" alt="" /></li>
                <li><img src="images/logo2.png" width ="100" alt="" /></li>
                <li><img src="images/logo2.png" width ="100" alt="" /></li>
            </ul>
        </div>
    </div>
</div>
<!--end-client-->
<!--start-lorem-->	
<div class="lorem">
    <div class="container">
        <div class="lorem-top">
            <div class="col-md-4 lorem-top-left">
                <h3><span>Valores</span></h3>
                <ul>
                    <li>IDENTIFIK S.A.S. Enfocarnos en el desarrollo de los mínimos detalles, sin perder de vista la necesidad de obtener continuamente resultados óptimos.</li>
                    <li>IDENTIFIK S.A.S. Aporta un valor agregado a las empresas vinculadas y focalizarnos en proporcionar ese valor en todo lo que hacemos.</li>
                    <li>IDENTIFIK S.A.S. Enfatizar en el valor agregado como modelo fundamental de IDENTIFIK S.A.S . Además de crear valor para los clientes, creamos valor para su entorno social.</li>
                    <li>IDENTIFIK S.A.S. Fomenta el desarrollo sostenible capaz de satisfacer las necesidades actuales, sin comprometer los recursos naturales y posibilidades de las futuras generaciones.</li>
                </ul>
                <div class="l-btn">
                    <a href="valores.html">Ver...</a>
                </div>
            </div>
            <div class="col-md-8 lorem-top-right">
                <h3><span>Misión</span></h3>
                <p>IDENTIFIK S.A.S. Somos un equipo multidisciplinario dispuesto a minimizar
                    tiempo en todos los procesos y desarrollos tecnológicos innovadores de 
                    la máxima calidad para cualquier tipo de empresa, contribuyendo a la 
                    integración de soluciones tecnológicas de identificación y automatización 
                    para la administración de información en línea y tiempo real, de manera 
                    virtual poniendo a su disposición nuestra plataforma, agilizando para 
                    usted los procesos internos de nuestros clientes de manera que crean 
                    valor agregado para la compañía y su entorno social.</p>
                <!--<div class="lorem-top-bottom">
                        <h5>Vladimir Plutin</h5>
                        <label>President, Rambo man, World savior</label>
                </div>
                <img src="images/men-1.png" alt="" />-->
            </div>
            <div class="col-md-8 lorem-top-right">
                <h3><span>Visión</span></h3>
                <p>IDENTIFIK S.A.S. ser la empresa reconocida a nivel nacional como líder en 
                    identificación y automatización para la administración de información en 
                    línea y tiempo real, que trascienda a nivel mundial como entidad innovadora, 
                    única en el mercado empresarial, para agilizar tiempo en los procesos, 
                    por parte de clientes, proveedores y todos los grupos de interés relacionados 
                    con la actividad de la compañía. Manteniendo actualizada la plataforma 
                    tecnológica, utilizando tecnología de punta.</p>
                <!--<div class="lorem-top-bottom">
                        <h5>Vladimir Plutin</h5>
                        <label>President, Rambo man, World savior</label>
                </div>
                <img src="images/men-1.png" alt="" />-->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="research">
            <?php foreach ($infos as $info ): ?>
            <div class="col-md-4 res-left">
                <img src="<?php echo base_url('assets/') ?>images/res-7.png" alt="" />   
                <h4><?php echo $info['title'] ?></h4>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. </p>-->
                <p><?php echo $info['text'] ?></p>
                <div class="r-btn">
                    <a href="<?php echo $info['url'] ?>">Leer Mas</a>
                </div>
            </div>
            <?php endforeach; ?>
            <!--            <div class="col-md-4 res-left">
                            <img src="<?php echo base_url('assets/') ?>images/res-6.png" alt="" />
                            <h4>Servicios En La Nube</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. </p>
                            <div class="r-btn">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-md-4 res-left">
                            <img src="<?php echo base_url('assets/') ?>images/res-4.png" alt="" />
                            <h4>Aplicaciones Moviles</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. </p>
                            <div class="r-btn">
                                <a href="#">Read more</a>
                            </div>
                        </div>-->
            <div class="clearfix"></div>
        </div>
        <a name="noticias"></a>
        <div class="target">
            <?php foreach ($noticias as $noticia ): ?>

            <div class="col-md-4 target-left">

                <h3> <span><?php echo $noticia['title']?></span></h3><h6><?php echo $noticia['date'] ?></h6>
                <p style="display:block;
                   margin:5px;
                   width:minimum;
                   padding:0px;
                   min-height:80px;
                   line-height:1.2;
                   word-wrap:true;">
                   <?php echo $noticia['text']?> 
                </p>

                <div class="t-btn">
                    <p><a href="<?php echo $noticia['url'] ?>"> Ver Mas...</a></p>
                </div>
            </div>
             <?php endforeach; ?>

            <div class="clearfix"></div>
        </div>
        <!--                <div class="project">
                            <h3>Selected <span>projects</span></h3>
                            <div class="project-top">
                                <div class="col-md-3 project-left">
                                    <img src="images/project-1.jpg" alt="" />
                                </div>
                                <div class="col-md-3 project-left">
                                    <img src="images/project-2.jpg" alt="" />
                                </div>
                                <div class="col-md-3 project-left">
                                    <img src="images/project-3.jpg" alt="" />
                                </div>
                                <div class="col-md-3 project-left">
                                    <img src="images/project-4.jpg" alt="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>-->
    </div>
</div>
