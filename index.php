<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("php/head-utils.php"); ?>
	</head>
	<body class="site">
		<div class="site-content">
			<header>
				<?php require_once("php/header.php"); ?>
			</header>

			<div class="slider hidden-sm hidden-xs">
				<a href="pages/portfolio.php"><img class="img-responsive slideone center-block hidden-sm hidden-xs" src="./lib/images/portfolioimage.png" alt="Slide One"></a>
				<a href="pages/services.php"><img class="img-responsive slideone center-block hidden-sm hidden-xs" src="./lib/images/servicesSlide.png" alt="Slide Two"></a>
				<a href="pages/contact.php"><img class="img-responsive slideone center-block hidden-sm hidden-xs" src="./lib/images/contactSlide.png" alt="Slide Three"></a>
			</div>

			<div class="mobile col-xs-12">
				<a href="pages/portfolio.php"><img class="img-responsive hidden-md hidden-lg" src="./lib/images/portfoliobutton.svg" alt="button one"></a>
				<a href="pages/services.php"><img class="img-responsive hidden-md hidden-lg" src="./lib/images/servicesbutton.svg" alt="button two"></a>
				<a href="pages/contact.php"><img class="img-responsive hidden-md hidden-lg" src="./lib/images/contactbutton.svg" alt="button three"></a>
			</div>

		</div>
		<footer>
			<?php require_once("php/footer.php"); ?>
		</footer>
	</body>
</html>
