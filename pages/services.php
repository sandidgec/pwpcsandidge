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
							<li><a href="portfolio.php">Portfolio</a></li>
						</ul>
					</div>
				</nav>
			</header>

			<div class="services center-block">
				<img class="img-responsive hidden-xs hidden-sm center-block" src="../lib/images/comicServices.png" alt="Services Graphic"></a>
			</div>

			<div class="mobile col-xs-12 serviceset">
				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/services.svg" alt="button one">
				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/webdesign.svg" alt="button two">
				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/appdev.svg" alt="button three">
				<img class="img-responsive hidden-md hidden-lg" src="../lib/images/skills.svg" alt="button four">
			</div>

</div>
		<footer>
			<?php require_once("../php/footer.php"); ?>
		</footer>
	</body>
</html>
