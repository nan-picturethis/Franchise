<!DOCTYPE html>
<html lang="en">
	<head>
		<script type="text/javascript">
			$(function(){
			// here the code for text minimiser and maxmiser by faisal khan
			var minimized_elements = $('p.text-viewer');
			minimized_elements.each(function(){    
			var t = $(this).text();        
			if(t.length < 500) return;
			$(this).html(
			t.slice(0,500)+'<span>... </span><a href="#" class="more"> Read More>> </a>'+
			'<span style="display:none;">'+ t.slice(500,t.length)+' <a href="#" class="less"> << Less </a></span>'
			);
			}); 
			$('a.more', minimized_elements).click(function(event){
			event.preventDefault();
			$(this).hide().prev().hide();
			$(this).next().show();        
			});
			$('a.less', minimized_elements).click(function(event){
			event.preventDefault();
			$(this).parent().hide().prev().show().prev().show();    
			});
			});
		</script>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
		<title>Picturethistoday Inc</title>
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
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
		
		<style>
			@media (max-width: 767px) {
				.ptt_about22, .ptt_about {
					padding: 60px 40px 0;
				}
			}			
		</style>
	</head>
	
	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
	
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Navigation -->
	<?php include("header_black.php"); ?>
		<section style="background: url(images/background.jpg);text-align: center">
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
						<h1 style="padding-bottom: 60px;padding-top:90px;color: #fff;">JOIN THE FUTURE OF REAL ESTATE</h1><br>
					</div>
				</div>
			</div>
		</section>

		<!-- Intro Section -->
		<section id="about" class="about-section" style="margin-top:60px">
			<div class="container" style="width: 100%;">
				<div class="row">
					<div class="col-lg-12 nopadding">
						<img src="images/about_us_profile.png" style="margin-top:10px;">
						<h1>Bryan Murray</h1>
						<h1>Owner, Picture This Calgary</h1>
						<p class="ptt_about22">
							When Bryan Murray was faced with significant layoffs at SNC Lavalin, including his supervisor position, his first concern was not money or finding a new job. It was the thought of saying goodbye to the members of his drafting team that affected him the most. “I always enjoyed going to work because we had such a fantastic group.”
							<br><br>
							Bryan not only found his new passion within just a few weeks, he is hoping to employ some of his drafting team in the venture. “I have trained and worked with some very talented people. It will be amazing to work together again.”
							<br><br>
							As the new owner of Picture This Calgary, Bryan is excited about combining his drafting expertise with his interests in photography, real estate, home renovations and 3D visualization. “I am thrilled to be able to continue living and working in the Calgary. I was born here and my entire family is here. It is a great place to live with no shortage of opportunities.”
							<br><br>
							“I am grateful for the opportunity to be a part of something new and groundbreaking. It is an absolute pleasure to introduce such a great product to the Calgary real estate community.” Picture This is a Canadian business that supports local merchants with an entirely new way for people to consider real estate. Picture This Calgary is locally owned and operated and shares the same commitment to the local economy.”
							<br><br>
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
				height: 100px;
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
		
		<section id="about" class="about-section">
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding" >
					<div class="col-lg-12 nopadding" >
						<p class="ptt_about" style="padding-bottom:80px;padding-top:80px;">
							Picture This Calgary is committed to providing a superior product,
							exceptional customer service and competitive pricing.
							Contact us today for information about selling or leasing your property faster.
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="about" class="about-section">
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding">
					<div class="col-lg-12 nopadding">
						<a href="http://picturethistoday.ca/franchises.php" target="_blank"><img src="images/becomefran.png" id="myImg" style="padding-top:35px;"></a><br><br>
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
