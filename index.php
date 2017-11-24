<?php
require_once('db/db.php'); //soubor s PDO
Db::connect('127.0.0.1', 'databaze_pro_web', 'root', ''); //adresa databáze
Db::query('
	INSERT INTO uzivatele (jmeno, prijmeni,	datum_narozeni, pocet_clanku) 	
	VALUES ("Jan",  "Novák",  "1984-11-03", 17)
'); // příkazy