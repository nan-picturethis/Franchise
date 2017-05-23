<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.navbar {
		position: relative;
		min-height: 80px;
		margin-bottom: 20px;
		border: 1px solid transparent;
	}	
	.dropdown-menu > li.kopie > a {
		padding-left:5px;
	}	
	.dropdown-submenu {
		position:relative;
	}	
	.dropdown-submenu>.dropdown-menu {
		top:0;left:100%;
		margin-top:-6px;margin-left:-1px;
		-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
	}	
	.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #333;
		border-style: solid;
		border-width: 5px 0 5px 5px;
		content: " ";
		display: block;
		float: right;  
		height: 0;     
		margin-right: -10px;
		margin-top: 5px;
		width: 0;
	}	
	.dropdown-submenu:hover>a:after {
		border-left-color:#555;
	}	
	.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
		text-decoration: underline;
	} 	
	@media (max-width: 767px) {	
		.navbar-nav  {
			display: inline;
		}		
		.navbar-default .navbar-brand {
			display: inline;
		}		
		.navbar-default .navbar-toggle .icon-bar {
			background-color: #000;
		}		
		.navbar-default .navbar-nav .dropdown-menu > li > a {
			color: red;
			background-color: #000;
			border-radius: 4px;
			margin-top: 2px;   
		}		
		.navbar-default .navbar-nav .open .dropdown-menu > li > a {
			color: #000;
		}		
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
			background-color: #000;
		}		
		.navbar-nav .open .dropdown-menu {
			border-bottom: 1px solid white; 
			border-radius: 0;
		}		
		.dropdown-menu {
			padding-left: 10px;
		}		
		.dropdown-menu .dropdown-menu {
			padding-left: 20px;
		}		
		.dropdown-menu .dropdown-menu .dropdown-menu {
			padding-left: 30px;
		}		
		li.dropdown.open {
			border: 0px solid red;
		}
	}	
	@media (min-width: 768px) {
		ul.nav li:hover > ul.dropdown-menu {
			display: block;
		}		
		#navbar {
			text-align: center;
		}
	}  	
	.dropdown-menu {
		background-color: #000;
		opacity: 0.8;
		color: #fff;
	}	
	.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
		background-color: #000;
	}	
	.ptt_nav
	{
		font-size: 13px;
	}
</style>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="width: 100%;margin-bottom:0px;background-color: #fff;">
	<div class="container" style="width: 100%">
		<div class="navbar-header page-scroll" >
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse" style="width: 100%" >
			<ul class="nav navbar-nav navbar-left">
				<li style="margin-top: -10px;margin-bottom: -10px;"><a href="index.php"><img src="images/logo_black.png" height="70px"></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="padding-top: 15px;">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden">
					<a class="page-scroll" href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll ptt_nav" href="index.php" style="color: #000;">HOME</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle page-scroll ptt_nav" data-toggle="dropdown" href="#samples" style="color:#000;">CUSTOMERS</a>
					<ul class="dropdown-menu">  
						<li><a href="furnishing.php" style="color: #fff;">FURNISHING</a></li>                        
						<li><a href="realestate.php" style="color: #fff;">REAL ESTATE</a></li>
					</ul>
				</li>
				<li>
					<a class="page-scroll ptt_nav" href="about.php" style="color: #000;">ABOUT US</a>
				</li>
				<li>
					<a class="page-scroll ptt_nav" href="blog.php" style="color: #000;">BLOG</a>
				</li>
				<li>
					<a class="page-scroll ptt_nav" href="#contact" style="color: #000;">CONTACT US</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>