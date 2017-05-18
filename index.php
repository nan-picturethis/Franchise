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
	</head>
	
	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
	
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >
		<?php include("header_home.php"); ?>
		<section>
			<div class="container nopadding" style="width: 100%;">
				<img src="images/home_banner.png" class="img-responsive">
			</div>
		</section>
		
		<style type="text/css">
			.e23:hover{
				background-color: rgba(0, 0, 0, 0.5);
			}
			* {
				box-sizing: border-box;
			}
			.video-background {
				background: #000;
				position: fixed;
				top: 0; right: 0; bottom: 0; left: 0;
				z-index: -99;
			}
			.video-foreground,
			.video-background iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				pointer-events: none;
			}
			#vidtop-content {
				top: 0;
				color: #fff;
			}
			.vid-info {
				position: relative;
				top: 0;
				right: 0;
				width: 33%;
				color: #fff;
				padding: 1rem;
				background: rgba(0,0,0,0.5);
			}
			.vid-info h1 {
				font-size: 2rem;
				font-weight: 700;
				margin-top: 0;
				line-height: 1.2;
			}
			.vid-info a {
				display: block;
				color: #fff;
				text-decoration: none;
				background: rgba(0,0,0,0.5);
				transition: .6s background;
				border-bottom: none;
				margin: 1rem auto;
				text-align: center;
			}
			@media (min-aspect-ratio: 16/9) {
				.video-foreground {
					height: 300%; top: -100%;
				}
			}
			@media (max-aspect-ratio: 16/9) {
				.video-foreground {
					width: 300%; left: -100%;
					}
			}
			@media all and (max-width: 600px) {
				.vid-info {
					width: 50%; padding: .5rem;
					}
				.vid-info h1 {
					margin-bottom: .2rem;
					}
			}
			@media all and (max-width: 500px) {
				.vid-info .acronym {
					display: none;
					}
			}
		</style>

		<!-- Intro Section -->
		<section id="about" class="about-section" >
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding" >
					<div class="col-lg-12 nopadding" >
						<p class="ptt_about" style="background: none;color: #000;margin-bottom:35px;">JOHANNESBURG NATIVE BRINGS CUTTING EDGE TECHNOLOGY HOME</p>
					</div>
				</div>
			</div>
		</section>

		<style type="text/css">
			iframe {
				display:block;
			}
		</style>
		
		<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/t2fJ_shBEfQ?version=3?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=t2fJ_shBEfQ?version=3" frameborder="0" style="width:100%;" allowfullscreen></iframe>
		
		<!-- Intro Section -->
		<section id="about" class="about-section" >
			<div class="container nopadding" style="width: 100%;">
				<div class="row nopadding" >
					<div class="col-lg-12 nopadding" >
					<p class="ptt_about" style="background: none;color: #000;"><a href="http://re3d.ca/view/sandbox" target="_blank"><img id="myImg" src="images/tryit.png" style="padding-top: 25px;padding-bottom: 30px;"></a></p>
					</div>
				</div>
			</div>
		</section>
		
		<style type="text/css">
		.twitterbird {
			width: 100%;
			height:80px;
			display:block;
			background: url('images/learnmorewht.png') center top no-repeat;
		}

		.twitterbird:hover {
			background-image: url('images/learnmoreorange.png');
		}
		</style>
		
		<section class="block3">
			<div class="container" style="width: 100%;">
				<div class="row" >
					<div class="col-lg-12" >
						<section class="ptt_sec3 e23">
							<h1 style="padding-top:20px;">FURNISHING VENDORS</h1>
							<p>Place your product inside exact 3D replicas of your customers own living spaces.</p>
							<p style="padding-top:20px;"><a href="furnishing.php" class="twitterbird" title="Twitter link"></a></p>
						</section>
						<section class="ptt_sec3 e23" style="margin-bottom:58px">
							<h1 style="padding-top:20px;">REAL ESTATE PROFESSIONALS</h1>
							<p>Clients engage with properties and make them their own, even before booking a showing.</p>
							<p style="padding-top:20px;"><a href="realestate.php" class="twitterbird" title="Twitter link"></a></p>
						</section>
					</div>
				</div>
			</div>
		</section>
		
		<!-- oportunity Section -->
		<section id="oportunity" class="oportunity-section" style="padding-top: 0;">
			<div class="container" style="width: 100%; background-color: #FFF;">
				<div class="row">
					<div class="col-lg-12" style="padding-top: 60px">
						<h1>OUR SECRET ADVANTAGE</h1><br>
						<div class="col-lg-12" style="text-align: center;padding-bottom:30px">
							<img src="images/spinning.gif" class="img-responsive center-block">
						</div>
						<p class="ptt_oppor1" style="margin:0;">Developed in beautiful Victoria, British Columbia, by an international team of software <br>developers, designers and innovators, RE3D gives Picture This an unparalleled edge in quality and service. <br>Customers enjoy pure shopping experiences inside stunning and accurate replicas of actual homes and work spaces.<br></p>
					</div>
					<div class="col-lg-12" style="text-align:center;">
						<a href="http://re3d.ca/view/sandbox" target="_blank"><img id="myImg" src="images/tryit.png" class="img-responsive" style="padding-top:25px;padding-bottom:30px;margin:0 auto;"></a>
						<script>
							// Get the modal
							var modal = document.getElementById('myModal');
							// Get the image and insert it inside the modal - use its "alt" text as a caption
							var img = document.getElementById('myImg');
							var modalImg = document.getElementById("img01");
							var captionText = document.getElementById("caption");
							img.onclick = function(){
							modal.style.display = "block";
							//modalImg.src = this.src;
							}
							// When the user clicks on <span> (x), close the modal
							modal.onclick = function() {
							modal.style.display = "none";
							}
						</script>
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
