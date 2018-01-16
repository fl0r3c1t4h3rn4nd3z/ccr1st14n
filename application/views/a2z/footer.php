<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
