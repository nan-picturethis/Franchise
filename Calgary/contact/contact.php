<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
Modified by Nan Yang
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Picturethistoday Inc</title>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- for-mobile-apps -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- //for-mobile-apps -->
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!--Google Fonts-->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<style>
			.contact-form input[type="submit"] {
				background: #F47A20;
				border: 2px solid #F47A20;
			}
			
			.styled-input input:focus ~ label, .styled-input input:valid ~ label, .styled-input textarea:focus ~ label, .styled-input textarea:valid ~ label {
				color: #F47A20;
			}
			
			.styled-input input ~ span, .styled-input textarea ~ span {
				background: #F47A20;
			}
			
			body {
				background: url(images/contact_bg.jpg) no-repeat center center;
				background-attachment: fixed;
				background-size: cover;
			}
			
			.contact-form {
				color: white;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="wthree-dot">
			<h1>Contact Us</h1>
			<div class="profile">
				<div class="wrap">
					<div class="contact-form">
						
<?php
	//if "email" variable is filled out, send email
	if (isset($_REQUEST['email'])) {
		$admin_email = "bryan@picturethistoday.ca";
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		
		mail($admin_email, "$subject", $message, "From:" . $email);
		
		echo "Thank you for contacting us!";
	}

	//if "email" variable is not filled out, display the form
	else  {
	?>						
						<form action="#" method="post">
							<div class="w3l-contact-left">
								<div class="styled-input agile-styled-input-top">
									<input type="text" name="name" required="">
									<label>Name</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="email" name="email" required=""> 
									<label>Email</label>
									<span></span>
								</div> 
								<div class="styled-input">
									<input type="text" name="phone" required="">
									<label>Phone</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="text" name="subject" required="">
									<label>Subject</label>
									<span></span>
								</div>
							</div>
							<div class="w3l-contact-right">
								<div class="styled-input agileits-input">
									<textarea name="message" required=""></textarea>
									<label>Message</label>
									<span></span>
								</div>	 
								<input type="submit" value="Submit">
							</div>
							<div class="clear"> </div>
						</form>
<?php
}
?>
						
					</div>
				</div>
			</div>
			<div class="wthree_footer_copy">
				<p>© COPYRIGHT 2013-2017 PICTURETHISTODAY 3D INC</p>
			</div>
		</div>
		
	</body>
</html>
