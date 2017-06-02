<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16" />
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
		
		<style>
			body {
				background: url(images/block3.png) no-repeat center center;
				background-attachment: fixed;
				background-size: cover;
				border: 1px solid transparent;
			}
			
			.btn {
				margin: 5px auto;
			}
		</style>
	</head>
	<body>
		<?php include("header_home.php"); ?>
		<div class="panel panel-default center-block" style="margin-top:15vh;width:90vw;">
			<div class="panel-heading">
				<strong>Picturethistoday Inc</strong> - Which page to modify?
			</div>
			<div class="panel-body">
				<button type="button" class="btn btn-default btn-lg btn-block">Home</button>
				<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="collapse" data-target="#customers">Customers</button>
				<div id="customers" class="collapse">
					<button type="button" class="btn btn btn-lg btn-block">Furnishing</button>
					<button type="button" class="btn btn btn-lg btn-block">Real Estate</button>
				</div>
				<button type="button" class="btn btn-default btn-lg btn-block">About Us</button>
				<button type="button" class="btn btn-default btn-lg btn-block">Contact Us</button>
				<button type="button" class="btn btn-primary btn-lg btn-block">Add A Page</button>
			</div>
			<div class="panel-footer" style="text-align:center;">
				Wanna Join Us? <a href="#" onClick="">Sign Up Here</a>
			</div>
		</div>
	</body>
</html>
