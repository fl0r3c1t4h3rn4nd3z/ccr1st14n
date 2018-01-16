<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- footer -->
	<div class="footer-main-w3_agile">
		<div class="footer-dot">
			<div class="container">
				<div class="footer-bottom">
					<div class="col-md-4 col-sm-6 col-xs-6 footer-grid1 address">
						<h4><?php print $this->lang->line('ContactInfo')?></h4>
						<ul>
							<li>
								<span class="fa fa-home" aria-hidden="true"></span>
								<p><?php print $this->lang->line('address')?></p>
							</li>
							<li>
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<a href="mailto:<?php print $this->lang->line('info@example.com')?>"><?php print $this->lang->line('info@example.com')?></a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span>
								<p><?php print $this->lang->line('tel3')?></p>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 res">
						<h4><?php print $this->lang->line('services')?></h4>
						<ul>
							<li>
								<a href="#"><?php print $this->lang->line('service1')?></a>
							</li>
							<li>
								<a href="#"><?php print $this->lang->line('service2')?></a>
							</li>
							<li>
								<a href="#"><?php print $this->lang->line('service3')?></a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 ftr-img">
						<h4><?php print $this->lang->line('latestPosts')?></h4>
						<ul>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6 footer-grid1">
						<h4><?php print $this->lang->line('legal')?></h4>
						<ul>
							<li>
								<a href="privacy.html"><?php print $this->lang->line('privacypolicy')?></a>
							</li>
							<li>
								<a href="#"><?php print $this->lang->line('licenceinfo')?></a>
							</li>
							<li>
								<a href="terms.html"><?php print $this->lang->line('termsofuse')?></a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="agileinfo-subscribe-grid text-center">
					<img src="images/mail.png" alt="">
					<h4><?php print $this->lang->line('suscribetitle')?></h4>
					<p> <?php print $this->lang->line('suscribesubtitle')?></p>
					<form action="#" method="post">
						<input type="email" placeholder="<?php print $this->lang->line('enteremail')?>..." name="Subscribe" required="">
						<button class="btn1"><?php print $this->lang->line('singup')?></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="cpy-footer">
		<div class="container">
			<div class="footer-top">
				<div class="logo-nav-left footer-top1">
					<h2>
						<a href="index.html">
							<span class="fa fa-home logo-ftr"></span><?php print $this->lang->line('a2z')?>
							<span class="logo-title"><?php print $this->lang->line('homeservices')?></span>
						</a>
					</h2>
				</div>
				<div class="footer-social">
					<h4><?php print $this->lang->line('connectwithus')?></h4>
					<ul>
						<li>
							<a href="<?php print $this->lang->line('facebook')?>">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="<?php print $this->lang->line('twitter')?>">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="<?php print $this->lang->line('dribbble')?>">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="<?php print $this->lang->line('g_plus')?>">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="cpy-text">
			<p>© 2017 A2Z. All rights reserved | Design by
				<a href="http://w3layouts.com/">W3layouts</a>
			</p>
		</div>

	</div>
<!--//footer  -->
	<!-- js -->
	<script src="<?php echo base_url('assets/a2z/') ?>js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="<?php echo base_url('assets/a2z/') ?>js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!--search-bar-->
	<script src="<?php echo base_url('assets/a2z/') ?>js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script  src="<?php echo base_url('assets/a2z/') ?>js/move-top.js"></script>
	<script  src="<?php echo base_url('assets/a2z/') ?>js/easing.js"></script>
	<script> 
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script> 
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script  src="<?php echo base_url('assets/a2z/') ?>js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url('assets/a2z/') ?>js/bootstrap.js"></script>
</body>

</html>
