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
		<a id="skippy" class="sr-only sr-only-focusable" href="<!-- TODO -->">
			<div class="container">
				<span class="skiplink-text">Skip to main content</span>
			</div>
		</a>
		<header class="navbar fixed-top shadow-sm">
			<div class="navbar-logo">

				<?php require_once 'structure/header/logo.html'; ?>

			</div>
			<div class="navbar-display">

				<?php require_once 'structure/header/device-switcher.html'; ?>

			</div>
		</header>
		<div clas="container-fluid">
			<div class="row">
				<!-- SIDEBAR -->
				<div class="col-md-2 d-none d-md-block sidebar bg-light">
					<div class="sidebar-sticky">
						<!-- MENU -->
						<div class="dropdown brand">

							<?php require_once 'structure/menu/brand.html'; ?>

						</div>
						<div class="dropdown-divider"></div>
						<div class="dropdown print">

							<?php require_once 'structure/menu/print.html'; ?>

						</div>
						<div class="dropdown-divider"></div>
						<div class="dropdown digital">

							<?php require_once 'structure/menu/digital.html'; ?>

						</div>
						<div class="sidebar-footer">

							<?php require_once 'structure/sidebar/disclaimer.html'; ?>

						</div>
					</div>
				</div>
				<main role="main" class="col-md-10 ml-sm-auto main">
					<div id="display-switch" class="display-switch">

						<!-- Brand Overview -->
						<?php require_once 'components/overview/index.php'; ?>
						<!-- Print Branding -->
						<!-- Digital Branding -->

					</div>
				</main>
			</div>
		</div>

		<!-- Load in the JavaScript -->
		<?php require_once 'structure/includes/footer-js.html'; ?>

	</body>
</html>
