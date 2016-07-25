<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Contact | Web Designer — Philippines</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,100,100italic,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="container" style="margin-top: 3%;">
		<a href="index.php"><h1 class="brand">Mark Anthony Valencia</h1>
		<h4 class="job-desc">Web designer | Front-End Developer | Web Developer</h4></a>
		<div class="nav center">
			<ul class="navbar">
				<li><a href="index.php">Home</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="contact.php" class="active">Contact</a></li>
			</ul>
		</div>
	</header>
	<div class="container">
		<div class="contact">
			
			<div class="form">
				<div class="row">
					<div class="col-3">&nbsp;</div>
					<div class="col-3">
					<h1>Contact Me!</h1>
						<form action="mailme.php" method="POST">
							<input type="text" name="name" placeholder="Name" required class="mail" autocomplete="off">
							<input type="email" name="email" placeholder="Email" required class="mail"  autocomplete="off">
							<textarea rows="4" name="message" required class="mail" placeholder="Your message"  autocomplete="off"></textarea>
							<input type="submit" name="submit" value="Send">
						</form>
					</div>
					<div class="col-3">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container footer">
	<div class="footer-nav">
		<div class="social-nav">
			<ul class="social">
				<li><a href="https://www.facebook.com/mark01218"  target="_blank"><img src="img/fb.png"></a></li>
				<li><a href="https://www.behance.net/valmarkencia" target="_blank"><img src="img/be.png"></a></li>
			</ul>
		</div>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="LQKRF5AQKBXPN">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	</div>
	
		<div class="footer">
			&copy; Copyright 2016
		</div>
	</div>
</body>
</html>