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

		<?php require_once 'scaffolding/includes/header-includes.html'; ?>

	</head>
	<body>
		<a id="skippy" class="sr-only sr-only-focusable" href="<!-- TODO -->">
			<div class="container">
				<span class="skiplink-text">Skip to main content</span>
			</div>
		</a>
		<header class="navbar fixed-top navbar-dark flex-column flex-md-row bd-navbar shadow-sm">
			<div class="navbar-logo">

				<?php require_once 'scaffolding/header/logo.html'; ?>

			</div>
			<div class="navbar-display">

				<?php require_once 'scaffolding/header/device-switcher.html'; ?>

			</div>
		</header>
		<div clas="container-fluid">
			<div class="row">
				<!-- SIDEBAR -->
				<div class="col-md-2 d-none d-md-block sidebar">
					<div class="sidebar-sticky">
						<!-- MENU -->
						<div class="dropdown brand">

							<?php require_once 'scaffolding/menu/brand.html'; ?>

						</div>
						<div class="dropdown-divider"></div>
						<div class="dropdown print">

							<?php require_once 'scaffolding/menu/print.html'; ?>

						</div>
						<div class="dropdown-divider"></div>
						<div class="dropdown digital">

							<?php require_once 'scaffolding/menu/digital.html'; ?>

						</div>
						<div class="sidebar-footer">

							<?php require_once 'scaffolding/sidebar/disclaimer.html'; ?>

						</div>
					</div>
				</div>
				<main role="main" class="col-md-9 bg-light ml-sm-auto col-lg-10 ">
					<div id="display-switch" class="display-switch">
						<h1 class="jumbotron-heading">Album example</h1>
						<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
					</div>
				</main>
			</div>
		</div>

		<!-- Load in the JavaScript -->
		<?php require_once 'scaffolding/includes/footer-js.html'; ?>

	</body>
</html>
