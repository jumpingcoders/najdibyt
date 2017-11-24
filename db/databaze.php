<?php

require_once('db/db.php'); //soubor s PDO
Db::connect('wm138.wedos.net', 'd155086_findbyt', 'a155086_findbyt', '49cRPx8K'); //adresa databáze a přístup k ní
Db::query('
	INSERT INTO uzivatele (jmeno, prijmeni,	datum_narozeni, pocet_clanku) 	
	VALUES ("Jan",  "Novák",  "1984-11-03", 17)
'); // příkazy
  
?>
