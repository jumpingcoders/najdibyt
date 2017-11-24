<?php
include "db/db.php";
include "api.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Najdi byt</title>
	<meta charset="utf-8">
</head>
<body>

<form method="POST">
	<div>
		Kde checete bydlet?
		<select name="localite">
			<option value="metro-kacerov">Metro-Kačerov</option>
		</select>
	</div>
	<div>
	<div>
		Velikost bytu v m2:
		<input type="number" name="size" placeholder="Velikost bytu v m2">
	</div>
	<div>
		Kde pracuješ? A jak dlouho chceš dojíždět? (v minutách)
		<input type="text" name="workAdress" placeholder="Adresa práce"><br />
		<input type="number" name="timeWork" placeholder="Doba dojíždění">
	</div>
	<div>
		Cena bytu v korunách
		<input type="number" name="price" placeholder="Zadejte maximální cenu bytu">
	</div>
	<div>
	Věková kategorie v okolí:
	<select name="ageGroup">
		<option value="1">8-18</option>
		<option value="2">19-25</option>
		<option value="3">26-35</option>
		<option value="4">36-55</option>
		<option value="5">56+</option>
	</select>
	</div>
	<input type="submit">
</form>

<?php

if (isset($file)) {
	echo "$file";
}

?>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="js/api.js"></script>

</body>
</html>