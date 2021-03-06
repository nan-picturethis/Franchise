<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
		<title>Picturethistoday Inc</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/modal.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="css/scrolling-nav.css" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-92563266-1', 'auto');
			ga('send', 'pageview');
		</script>
		
		<style type="text/css">
			.e23:hover {
				background: rgba(0,0,0,0.5);
			}
			
			.e33:hover {
				background: url('images/view_orange.png');
			}

			.e34:hover {
				background: url('images/contact_us_orange.png');
			}
			
			.e35:hover {
				background: url('images/learn_more_orange.png');
			}
			
			@media (max-width: 767px) {
				.ptt_about22 {
					padding: 60px 40px 0;
				}
			}
			
			/* override position and transform in 3.3.x */
			.carousel-inner .item.left.active {
				transform: translateX(-33%);
			}
			.carousel-inner .item.right.active {
				transform: translateX(33%);
			}

			.carousel-inner .item.next {
				transform: translateX(33%)
			}
			.carousel-inner .item.prev {
				transform: translateX(-33%)
			}

			.carousel-inner .item.right,
			.carousel-inner .item.left { 
				transform: translateX(0);
			}
			
			.carousel-control.left,.carousel-control.right {background-image:none;}
		</style>
	</head>
	
	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
	
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<?php include("header_black.php"); ?>
		
		<section style="background: url(images/background.jpg);text-align: center">
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
						<h1 style="padding-bottom: 60px;padding-top:92px;color: #fff;">JOIN THE FUTURE OF REAL ESTATE</h1><br>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Intro Section -->
		<section id="about" class="about-section" >
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
						<p class="ptt_about22" style="padding-bottom:0;">
							Imagine clients walking inside digital replicas of your property listings. They can paint the walls, replace flooring and arrange furnishings according to their own taste -- from anywhere and at any time. They experience the space and understand its potential, even before the showing. All that’s left is the paperwork.<br>
							<a href="http://re3d.ca/view/sandbox" target="_blank"><img src="images/tryit.png" id="myImg" class="img-responsive center-block" style="padding-top:40px;"></a><br>
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<style type="text/css">
		iframe {
			display:block;
		}
		</style>
		
		<div class="container-fluid nopadding">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-4 nopadding"><img src="images/slides1.jpg" alt="" style="width:100%;"></div>
					</div>
					<div class="item">
						<div class="col-md-4 nopadding"><img src="images/slides2.jpg" alt="" style="width:100%;"></div>
					</div>
					<div class="item">
						<div class="col-md-4 nopadding"><img src="images/slides3.jpg" alt="" style="width:100%;"></div>
					</div>
					<div class="item">
						<div class="col-md-4 nopadding"><img src="images/slides4.jpg" alt="" style="width:100%;"></div>
					</div>
					<div class="item">
						<div class="col-md-4 nopadding"><img src="images/slides5.jpg" alt="" style="width:100%;"></div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
		
		<script>
		$('#myCarousel').carousel({
		interval: 10000
		})

		$('.carousel .item').each(function(){
		var next = $(this).next();
		if (!next.length) {
		next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		if (next.next().length>0) {
		next.next().children(':first-child').clone().appendTo($(this));
		}
		else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
		}
		});
		</script>
		
		<section style="margin:40px auto 60px;">
			<div class="container nopadding" style="width: 100%;text-align: center;">
				<div class="row nopadding">
					<div class="col-lg-12">
						<img src="images/howrealestate.png" class="img-responsive center-block" style="width:80%">
					</div>
				</div>
			</div>
		</section>
		
		<section class="block4 nopadding">
			<div class="container" style="width:100%;">
				<div class="row" >
					<div class="col-lg-12" >
						<section class="ptt_sec3 e23" style="width:85%;margin:60px auto;">
							<p style="padding-top:40px;">TRULY IMMERSIVE + INTERACTIVE</p>
							<p style="padding-left:20px;padding-right:20px">Our groundbreaking software, re3d, creates a real-time 3D living space your client can completely customize. See all our 3D listings.</p><br><a href="http://re3d.ca/"><img id="my-img" class="img-responsive center-block e33" src="images/view_button.png" /></a><br><br>
						</section>
						<section class="ptt_sec3 e23" style="width:85%;margin:60px auto;">
							<p style="padding-top:40px;">QUICK TURNAROUND</p>
							<p style="padding-left:20px;padding-right:20px">Accurate Bluetooth laser measurements are fed directly into tablets with plans ready to embed to your website and link to MLS within 48 hours</p><br><a href="#contact"><img id="my-img" class="img-responsive center-block e34" src="images/contact_us_button.png"/></a><br><br>
						</section>
						<section class="ptt_sec3 e23" style="width:85%;margin:60px auto;">
							<p style="padding-top:40px;">REAL FURNISHINGS JUST A CLICK AWAY</p>
							<p style="padding-left:20px;padding-right:20px">All products used in our 3D renderings are available at local stores and online. What you see is really what you get.</p><br><a href="http://picturethistoday.ca/furnishing.php"><img id="my-img" class="img-responsive center-block e35" src="images/learn_more_button.png"/></a><br><br>
						</section>
					</div>
				</div>
			</div>
		</section>
		
		<section id="about" class="about-section">
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
						<a href="http://re3d.ca/view/sandbox" target="_blank"><img src="images/tryit.png" id="myImg" class="img-responsive center-block" style="padding-top:60px;"></a><br><br>
					</div>
				</div>
			</div>
		</section>


		<section style="padding-top: 80px;padding-bottom: 80px;background-color: #3a3a3a">
			<div class="container nopadding" style="width: 100%;text-align: center;">
				<div class="row nopadding">
					<div class="col-lg-12">
						<h1 style="font-weight: bold;color: #FFF;">PROCESS</h1> <br><br>
						<img src="images/process_measure.png" style="margin:30px;">
						<img src="images/3-DOTS.png" style="margin:5px auto 30px;">
						<img src="images/process_build.png" style="margin:30px;">
						<img src="images/3-DOTS.png" style="margin:5px auto 30px;">
						<img src="images/process_share.png" style="margin:30px;">
					</div>
				</div>
			</div>
		</section>
		
		<style>
			.panel-heading h1:hover, .panel-heading h3:hover {
				text-decoration: underline;
			}
		</style>
		
		<section>
			<div class="container-fluid nopadding">
				<div class="row nopadding" style="height:50px;">
				</div>
				<div class="row nopadding">
					<div class="col-md-6" style="text-align:center;padding:120px 0 0 0;">
						<!-- begin panel group -->
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- panel 1 -->
							<!--wrap panel heading in span to trigger image change as well as collapse -->
							<span class="side-tab nopadding" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false" >
								<div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<h1>What we do for...</h1>
								</div>
							</span>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							</div>
							<!-- / panel 1 -->
							
							<!-- panel 2 -->
							<!--wrap panel heading in span to trigger image change as well as collapse -->
							<span class="side-tab nopadding" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
								<div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<h3>Realtors and Brokers</h3>
								</div>
							</span>
							<!-- / panel 2 -->
							
							<!--  panel 3 -->
							<!--wrap panel heading in span to trigger image change as well as collapse -->
							<span class="side-tab nopadding" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
								<div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<h3 >Property Management</h3>
								</div>
							</span>
							<!-- / panel 3 -->
							
							<!-- panel 4 -->
							<span class="side-tab nopadding" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
								<div class="panel-heading" role="tab" id="headingFour"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<h3 >Home Builders</h3>
								</div>
							</span>
							<!-- / panel 4 -->
							
							<!-- panel 5 -->
							<span class="side-tab nopadding" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
								<div class="panel-heading" role="tab" id="headingFive"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<h3 >Commercial Sales and Leasing</h3>
								</div>
							</span>
							<!-- / panel 5 -->
						</div> <!-- / panel-group -->
					</div>
					
					<div class="col-md-6" style="padding-top:20px;">
						<!-- begin macbook pro mockup -->
						<div class="md-macbook-pro md-glare">
							<div class="md-lid">
								<div class="md-camera"></div>
									<div class="md-screen">
									<!-- content goes here -->                
									<div class="tab-featured-image">
										<div class="tab-content">
											<div class="tab-pane  in active" id="tab1" style="background:url(images/whatwedonormal.png);height:700px;background-repeat:no-repeat;">
											</div>
											<div class="tab-pane fade" id="tab2" style="background:url(images/whatwedofilter.png);height:700px;max-width:600px;padding:0 10% 100px 10%;background-repeat:no-repeat;color:#fff;overflow:auto;">
												<br><br>
												<h1>Realtors and Brokers</h1><br>
												<p style="font-size:24px">Help clients see past existing furnishing and décor and visualize properties to their full potential. 3D replicas of properties are created accurately and quickly using our groundbreaking technology designed specifically for real estate. The process is the same as creating basic 2D floor plans and the replicas are virtually staged with furnishings appropriate for the size and style of the living space. Homebuyers can “walk” inside, change paint and floor coverings, furnishings, making the property their own even before booking a showing.</p>                                
											</div>
											<div class="tab-pane fade" id="tab3" style="background:url(images/whatwedofilter.png);height:700px;max-width:600px;padding:0 10% 100px 10%;background-repeat:no-repeat;color:#fff;overflow:auto;">
												<br><br>
												<h1>Property Management</h1> <br>
												<p style="font-size:24px">Rent your property faster, with fewer unproductive showings. Potential renters can “walk” inside a 3D replica of your property at their own convenience, from their browser. Each property is virtually staged with furnishings appropriate for the size and style of the living spaces. A link to the presentation can be added to your website, Kijiji, RentFaster, or another listing services.</p>
											</div>
											<div class="tab-pane fade" id="tab4" style="background:url(images/whatwedofilter.png);height:700px;max-width:600px;padding:0 10% 100px 10%;background-repeat:no-repeat;color:#fff;overflow:auto;">
												<br><br>
												<h1>Home Builders</h1><br>
												<p style="font-size:24px">There’s no more effective way to sell a property than to let your clients take a walk inside. Great in theory, but a little challenging if the building isn’t complete. We work from CAD drawings to create fully interactive 3D replicas of new builds. Prospective home buyers can “walk” through the virtual space, view finishing options and try furnishings on for size — getting a true sense of the space before the developer breaks ground. The display can be added to a website or showroom kiosk and customized to fit with your branding.</p>
											</div>
											<div class="tab-pane fade" id="tab5" style="background:url(images/whatwedofilter.png);height:700px;max-width:600px;padding:0 10% 100px 10%;background-repeat:no-repeat;color:#fff;overflow:auto;">
												<br><br>
												<h1>Comercial Sales and Leasing</h1><br>
												<p style="font-size:24px">Use RE3D to present different layout options for various types of business, and help your clients visualize how property will best work for their business. Prospective customers can “walk” inside a property and customize suggested layouts by changing paint and flooring, placing desks, cubicles, reception counters and much more. The replica can be added to your listings as a selling tool.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="md-base"></div>
						</div> <!-- end macbook pro mockup -->
					</div>
				</div> <!--/ .row -->
				<div class="row nopadding" style="height:40px;">
				</div>
			</div> <!-- end sidetab container -->
		</section>
		
		<style>
		.ppt-tbl {
			padding-left:0px;
			padding-right:0px;
			width: 47.5%;
		}
		.ppt-tblm {
			padding-left:0px;
			padding-right:0px;
			width:5%;
		}
		.hrnew {
			width:100%; 
			height:0px; 
			background: #3a3a3a;
		}
		.ppt-col12 {
			color:#3a3a3a;
			border-right:#3a3a3a solid 1px;
			border-left:#3a3a3a solid 1px;
			border-top:#3a3a3a solid 1px;
			border-bottom:#3a3a3a solid 1px;
			padding-left: 0px;
			padding-right: 0px;
		}
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
			border: 0;
			border-top: 1px solid #3a3a3a;
		}
		</style>
		
		<style type="text/css">
		/* carousel */
		#quote-carousel {
			padding: 0 10px 30px 10px;
			margin-top: 30px;
		}
		
		/* Control buttons  */
		#quote-carousel .carousel-control {
			background: none;
			color: #222;
			font-size: 2.3em;
			text-shadow: none;
			margin-top: 30px;
		}
		
		/* Previous button  */
		#quote-carousel .carousel-control.left {
			left: -12px;
		}
		
		/* Next button  */
		#quote-carousel .carousel-control.right {
			right: -12px !important;
		}
		
		/* Changes the position of the indicators */
		#quote-carousel .carousel-indicators {
			right: 50%;
			top: auto;
			bottom: 0px;
			margin-right: -19px;
		}
		
		/* Changes the color of the indicators */
		#quote-carousel .carousel-indicators li {
			background: #c0c0c0;
		}
		
		#quote-carousel .carousel-indicators .active {
			background: #333333;
		}
		
		#quote-carousel img {
			width: 250px;
			height: 100px
		}
		/* End carousel */
		
		.item blockquote {
			border-left: none; 
			margin: 0;
		}
		
		.item blockquote img {
			margin-bottom: 10px;
		}
		
		.item blockquote p:before {
			content: "\f10d";
			font-family: 'Fontawesome';
			float: left;
			margin-right: 10px;
		}
		
		/**
		MEDIA QUERIES
		*/

		/* Small devices (tablets, 768px and up) */
		@media (min-width: 768px) { 
			#quote-carousel {
				margin-bottom: 0;
				padding: 0 40px 30px 40px;
			}
		}

		/* Small devices (tablets, up to 768px) */
		@media (max-width: 768px) { 
			/* Make the indicators larger for easier clicking with fingers/thumb on mobile */
			#quote-carousel .carousel-indicators {
				bottom: -20px !important;  
			}
			
			#quote-carousel .carousel-indicators li {
				display: inline-block;
				margin: 0px 5px;
				width: 15px;
				height: 15px;
			}
			
			#quote-carousel .carousel-indicators li.active {
				margin: 0px 5px;
				width: 20px;
				height: 20px;
			}
		}
		</style>
		
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		
		<script type="text/javascript">
			$(document).ready(function() {
			//Set the carousel options
			$('#quote-carousel').carousel({
			pause: true,
			interval: 4000,
			});
			});
		</script>
		
		<!-- Intro Section -->
		<section id="about" class="about-section" style="padding-bottom: 80px;">
			<div class="container nopadding" style="width: 100%;color: #000;background-color: ##efeeee;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
					<h1 style="font-weight: bold;background-color: ##efeeee;padding-top:80px;">OUR SERVICE TO REAL ESTATE INDUSTRY</h1> <br><br>
						<div class="col-lg-12" style="background-color: ##efeeee;">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-2">
								<img src="images/virtual-staging.png" class="img-responsive center-block" style="width:40%;padding-top:30px;">
								<h3>Virtual Staging</h3>
							</div>
							<div class="col-lg-2">
								<img src="images/property-renos.png" class="img-responsive center-block" style="width:40%;padding-top:30px;">
								<h3>Virtual Renos</h3>
							</div>
							<div class="col-lg-2">
								<img src="images/2d-plans.png" class="img-responsive center-block" style="width:40%;padding-top:30px;">
								<h3>2D Floor Plans</h3>
							</div>
							<div class="col-lg-2">
								<img src="images/high-reso-images.png" class="img-responsive center-block" style="width:40%;padding-top:30px;">
								<h3>High Res Photos</h3>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php include("map.php"); ?>
		<?php include("footer.php"); ?>
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
	</body>
</html>
