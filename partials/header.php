<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Portfolio | Web Designer — Philippines</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,100,100italic,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="container" style="margin-top: 3%;">
	<div class="mobile-nav">
		<div class="row">
			<div class="col-s-11">
				<a href="index.php"><h1 class="brand">Mark Anthony Valencia</h1>
				<h4 class="job-desc">Web designer | Front-End Developer | Web Developer</h4></a>
			</div>
			<div class="col-s-1 hamburger">
				<a href="" class="right"><img src="img/navicon.png" alt=""></a>
			</div>
		</div>
	</div>
		<a href="index.php"><h1 class="brand desktop">Mark Anthony Valencia</h1>
		<h4 class="job-desc desktop">Web designer | Front-End Developer | Web Developer</h4></a>
		
		<div class="nav center">
			<ul class="navbar">
				<li <?php if ($active == 'index'){ echo ' class="active"';} ?>><a href="index">Home</a></li>
				<li <?php if ($active == 'portfolio'){ echo ' class="active"';} ?>><a href="portfolio">Portfolio</a></li>
				<li <?php if ($active == 'contact'){ echo ' class="active"';} ?>><a href="contact">Contact</a></li>
			</ul>
		</div>
	</header>