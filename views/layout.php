<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basis Data</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="resources/css/core.css">
</head>
<body>

	<nav>
		<div class="nav-wrapper">
			<div class="container">
				<a href="#" class="brand-logo">BasDat</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="?p=index">Home</a></li>
					<li><a href="?p=register">Register</a></li>
					<li><a href="?p=whatever">Error</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<main>
		<div class="container">
			<?php require_once($data['__content__']); ?>
		</div>
	</main>

	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	
</body>
</html>