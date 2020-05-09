
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 w3layouts_footer_grid"> 
				<div class="title">
					<h2>Follow Us</h2> 
				</div>
				<div class="social-icon social_agileinfo">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
					<a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
				</div> 
			</div>
			<div class="col-md-8 w3layouts_footer_grid">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter Your Email..." required="">
					<input type="submit" value="Submit"> 
					<div class="clearfix"> </div>
				</form>
				<ul class="w3l_footer_nav">
					<li><a href="index.php">Home</a></li> 
					<li><a href="about.php">About</a></li>
					<li><a href="icons.html">Icons</a></li> 
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="contact.php">Contact Us</a></li>	
				</ul> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-w3copy w3-agileits">
		<p>© 2017 Edify. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	<!-- //footer -->    
	<!-- banner Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:false,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
	<!-- //End-slider-script -->
    <script src="js/bootstrap.js"></script>
</body>
</html>