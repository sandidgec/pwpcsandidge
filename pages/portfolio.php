<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../php/head-utils.php"); ?>

		<link type="text/css" href="../lib/css/mystyle.css" rel="stylesheet"/>
	</head>
	<body class="site">
		<div class="site-content">
			<header>
				<nav class="navbar nav-pulls-right">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
							<span class="sr-only">Menu</span>
							<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
					</div>

					<div class="navbar-left dbntext">
						<a href="../index.php"><h4>design by Ninja</h4></a>
					</div>

					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right topnav">
							<li><a href="contact.php">Contact</a></li>
							<li><a href="services.php">Services</a></li>
						</ul>
					</div>
				</nav>
			</header>

			<h2 class="porttext">Portfolio</h2>

			<div class="portfolioimages">
				<a href="#"><img class="img-responsive center-block" src="../lib/images/shotpunctuality.png" alt="Slide One"></a>
				<!--				<p class="moreinfo">Punctualityapp.com is the home base for a native mobile application that dynamically schedules your time in regards to navigation data.</p>-->
				<a href="#"><img class="img-responsive center-block" src="../lib/images/shotinvtext.png" alt="Slide Two"></a>
				<a href="#"><img class="img-responsive center-block" src="../lib/images/shotnmnp.png" alt="Slide Three"></a>
				<a href="#"><img class="img-responsive center-block" src="../lib/images/shotnmapproved.png" alt="Slide Four"></a>
			</div>

			<!--			<div class="mobile col-xs-12 portfolioset">-->
			<!--				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/services.svg" alt="button one">-->
			<!--				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/webdesign.svg" alt="button two">-->
			<!--				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/appdev.svg" alt="button three">-->
			<!--				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/skills.svg" alt="button four">-->
			<!--			</div>-->
		</div>
		<footer>
			<?php require_once("../php/footer.php"); ?>
		</footer>


	</body>
</html>