<?php
include "db/db.php";
include "api.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Najdi si byt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
<form method="POST">
			<div id="page-wrapper">

					<header id="header" class="alt">
						<h1><a href="index.html">Najdi si byt</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<h1>TADY NIC NENÍ, PROTOŽE JSME LÍNÍ :P</h1>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-diamond"></span></div>
							<h2>Najdi si byt</h2>
							<p>Najdi si svůj vysněný byt, třeba protože nemáš rád důchodce. Jednoduchá appka byla vytvořena během hackhathonu <a href="https://hacknismichov.cz">Hackni Smíchov</a>.</p>
						</div>
					</section>

					<section id="wrapper">

							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">V jaké oblasti by jste rád bydlel/a?</h2>
										<select name="localite">
			<option value="metro-kacerov">Metro-Kačerov</option>
		</select><br />
									</div>
								</div>
							</section>

							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Velikost bytu v m<sup>2</sup></h2>
										<input type="number" name="size" placeholder="Zadejte velikost bytu">
									</div>
								</div>
							</section>

							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Cena, kterou chceš dát za byt (v korunách)</h2>
										<input type="number" name="price" placeholder="Zadejte maximální cenu bytu"><br />
									</div>
								</div>
							</section>

							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Zadej věk v okolí (třeba protože nemáš rád důchodce)</h2>
										<select name="ageGroup">
		<option value="1">8-18</option>
		<option value="2">19-25</option>
		<option value="3">26-35</option>
		<option value="4">36-55</option>
		<option value="5">56+</option>
	</select><br />
</form>
	<input type="submit">
									</div>
								</div>
							</section>

							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<?php

if (isset($file)) {
	echo "$file";
}

?>
								</div>
							</section>

					</section>

			</div>

			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="js/api.js"></script>

	</body>
</html>