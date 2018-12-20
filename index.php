<?php
/**
 * DGC Style Guide - This is where the magic gets pulled together.
 *
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DGC Style guide</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php require_once 'structure/includes/header-includes.html'; ?>

	</head>
	<body>
		<a id="skippy" class="sr-only sr-only-focusable" href="">
			<span class="skiplink-text">Skip to main content</span>
		</a>
		<header class="navbar fixed-top shadow-sm bg-white">
			<div class="navbar-logo">

				<?php require_once 'structure/header/logo.html'; ?>

			</div>

			<div class="navbar-menu">
				<?php require_once 'structure/header/menu.php'; ?>
			</div>

			<div class="navbar-display">

				<?php require_once 'structure/header/device-switcher.html'; ?>

			</div>
		</header>
		<main id="content" role="main">
			<div class="container">
				<div class="row">
					<div id="display-switch" class="col-12">

						<?php require_once 'components/overview/index.php'; ?>

					</div>
				</div>
			</div>
		</main>

		<!-- Load in the JavaScript -->
		<?php require_once 'structure/includes/footer-js.html'; ?>

	</body>
</html>
