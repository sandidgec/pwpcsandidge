<?php ?>

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
							<li><a href="portfolio.php">Portfolio</a></li>
							<li><a href="services.php">Services</a></li>
						</ul>
					</div>
				</nav>
			</header>

			<div class="contactform">


				<div class="col-sm-2 ninjaone hidden-sm hidden-xs">
					<img src="../lib/images/smallNinja.png" alt="ninja logo">
				</div>

				<div class="col-sm-8">
					<?php require_once("../php/emailform.php"); ?>
				</div>

				<div class="col-sm-2 ninjatwo center-block">
					<img src="../lib/images/smallNinja.png" alt="ninja logo">
				</div>

			</div>

		</div>
		<h2 class="charles">charles@designbyNinja.com</h2>
		<footer>
			<?php require_once("../php/footer.php"); ?>
		</footer>
	</body>
</html>



