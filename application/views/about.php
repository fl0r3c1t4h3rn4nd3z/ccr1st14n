<!--start-about-->
        <div class="about">
            <div class="container">
                <div class="about-main">
                    <h3>Sobre Nosotros</h3>
                    <div class="about-top">
                        <img src="images/logo.jpg" alt="" width="300"/>
                        <p>IDENTIFIK S.A.S. desarrollamos soluciones tecnológicas de identificación y 
                            automatización para la administración de información en línea y tiempo real 
                            para clientes, que ofrezcan productos tangibles o intangibles. Innovando día a 
                            día nuestro portafolio de equipos requeridos y conocimiento con base a un 
                            estudio preliminar y específico, que nos permitirá desarrollar soluciones 
                            para satisfacer las necesidades de nuestros clientes. Más allá de ser su 
                            proveedor, seremos un socio estratégico,  trasmitiendo y sumando toda 
                            nuestra experiencia con la suya y así crecer conjuntamente en todas sus direcciones.
                        </p>
                        <p> Trabajamos mancomunadamente entre clientes y nuestros posibles 
                            proveedores, para lograr la máxima calidad de las soluciones tecnológicas 
                            de identificación y automatización para la administración de información 
                            en línea y tiempo real.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--start-about-->
        <!--start-team-->
        <div class="team">
            <div class="container">
                <div class="team-main">
                    <h3>Nuestro Equipo</h3>
                    <div class="team-top">
                         <?php foreach ($nosotros as $n):?>
                        <div class="col-md-3 team-left">
                           
                            <img src=" <?php echo $n['img'] ?>" alt="">
                            <h4> <?php echo $n['title'] ?></h4>
                            <p> <?php echo $n['text'] ?></p>
                        </div>
                        <?php endforeach;?>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--start-team-->
        <!--start-advn-->
        <div class="advn">
            <div class="container">
                <div class="advn-main">
                    <h3>Nuestras Ventajas</h3>
                    <div class="advn-top">
                        <div class="col-md-4 advn-left">
                            <span>1</span>
                            <h4>Acceso a información fiable</h4>
                            <p >
                                El uso de una base de datos común.
                                <br>
                                La consistencia y exactitud de los datos.
                                <br>
                                Las mejoras en los informes del sistema.
                            </p>
                        </div>
                        <div class="col-md-4 advn-left">
                            <span>2</span>
                            <h4>Reducción de costos</h4>
                            <p> Esta reducción se debe tanto a la economía de tiempo, como a las mejoras en el control y en el análisis de las decisiones empresariales.</p>
                        </div>
                        <div class="col-md-4 advn-left">
                            <span>3</span>
                            <h4> Fácil adaptabilidad</h4>
                            <p> Los sistemas ERP se pueden modificar a través de la redefinición de sus distintos procesos de negocio, esto hace fácil que se adapte y reestructure para satisfacer los nuevos requerimientos.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-advn-->