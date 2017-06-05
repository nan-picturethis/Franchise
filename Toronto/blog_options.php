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
		<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
		
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
			
			input[type="file"] {
				display: inline-block;
				width: 80%;
			}
		</style>
	</head>
	<body>
		<div class="panel panel-default center-block" style="margin-top:15vh;width:90vw;">
			<div class="panel-heading">
				<strong>Picturethistoday Inc</strong> - Which sections to modify on BLOG page?
			</div>
			<div class="panel-body">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add A New Section</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<form action="">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter the title">
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Enter the text" style="resize:vertical;"></textarea>
									</div>
									<div class="form-group">
										<input type="file" class="form-control filestyle"  data-input="false"  data-buttonText="Upload an image">
									</div>
									<button type="reset" class="btn btn-default">Reset</button>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer" style="text-align:center;">
				Wanna Join Us? <a href="#" onClick="">Sign Up Here</a>
			</div>
		</div>
	</body>
</html>
