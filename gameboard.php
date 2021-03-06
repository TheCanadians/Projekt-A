<!DOCTYPE html>
<html lang=de>
	<head>
		<meta charset=UTF-8>
		<title>Amyitis</title>
		<link rel=stylesheet type="text/css" href="Stylesheets/game.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/stylesheet.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/index.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/meso.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/babylon.css">
		<link rel=stylesheet type="text/css" href="Stylesheets/tables.css">
	</head>
	<body class="container body">
		<!-- Start Main Nav -->
		<header class="container item header">
			<?php include 'Gruppen_de/mainmenu.html'; ?>
		</header>
		<!-- Ende Main Nav -->
		<main class="container item main">
			<!-- Seitenmenu -->
			<?php include 'Gruppen_de/sidemenu.php'; ?>
			<!-- Spielfeld -->
			<?php include 'Gruppen_de/gamefield.html'; ?>
		</main>
		<footer>
			<!-- Navigation Spielzug -->
			<?php include 'Gruppen_de/turn.html'; ?>
		</footer>
	</body>
</html>