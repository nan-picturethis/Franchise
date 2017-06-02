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
			.panel-heading {
				padding: 5px 15px;
			}

			.panel-footer {
				padding: 1px 15px;
				color: #A0A0A0;
			}

			.profile-img {
				width: 96px;
				height: 96px;
				margin: 0 auto 10px;
				display: block;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				border-radius: 50%;
			}
			
			body {
				background: url(images/block3.png) no-repeat center center;
				background-attachment: fixed;
				background-size: cover;
				border: 1px solid transparent;
			}
		</style>
	</head>
	<body>
		<div class="container" style="margin-top:18vh;">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>Picturethistoday Inc</strong>
						</div>
						<div class="panel-body">
							<form role="form" action="#" method="POST">
								<fieldset>
									<div class="row">
										<div class="center-block">
											<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-10 col-md-offset-1">
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-user"></i>
													</span>
													<input class="form-control" placeholder="Username" name="username" type="text" autofocus />
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-envelope"></i>
													</span>
													<input class="form-control" placeholder="Email" name="email" type="email" autofocus />
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-lock"></i>
													</span>
													<input class="form-control" placeholder="Password" name="password" type="password" value="" />
												</div>
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-lg btn-primary btn-block" value="Log In">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="panel-footer" style="text-align:center;">
							Wanna Join Us? <a href="#" onClick="">Sign Up Here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
