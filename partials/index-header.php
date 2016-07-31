<?php $active = "index"; ?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Welcome! | Mark Anthony Valencia | Web Designer — Philippines</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,100,100italic,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header class="container" style="margin-top: 3%;">
	<div class="mobile-nav right">
		<span class="navicon" onclick="openNav()"><img src="img/navicon.png" alt=""></span>
		<div class="sidepanel" id="sidepanel">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index" <?php if ($active == 'index'){ echo ' class="active"';} ?>>Home</a><br>
			<a href="portfolio" <?php if ($active == 'portfolio'){ echo ' class="active"';} ?>>Portfolio</a><br>
			<a href="contact" <?php if ($active == 'contact'){ echo ' class="active"';} ?>>Contact</a>
		</div>
	</div>
	<div class="nav center">
			<ul class="navbar">
				<li <?php if ($active == 'index'){ echo ' class="active"';} ?>><a href="index">Home</a></li>
				<li <?php if ($active == 'portfolio'){ echo ' class="active"';} ?>><a href="portfolio">Portfolio</a></li>
				<li <?php if ($active == 'contact'){ echo ' class="active"';} ?>><a href="contact">Contact</a></li>
			</ul>
	</div>
</header>
<div id="main">