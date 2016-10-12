<!DOCTYPE html>
<html lang="en">
<head>
	<title>Christine's Awesome Cat</title>
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-united.min.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/91e96e53f2.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="site -color-primary">

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">My Cat is Best Cat</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="primary-nav">
				<ul class="nav navbar-nav">
				<?php $active = basename($_SERVER['SCRIPT_NAME']); ?>
					<li<?php echo ($active=='index.php')?' class="active"':'';?>><a href="index.php">About<span class="sr-only"> (current)</span></a></li>
					<li<?php echo ($active=='portfolio.php')?' class="active"':'';?>><a href="portfolio.php">Portfolio</a></li>
					<li<?php echo ($active=='contact.php')?' class="active"':'';?>><a href="contact.php">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>