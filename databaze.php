<?php
  require_once('db/db.php'); //soubor s PDO
//Db::connect('127.0.0.1', 'databaze_pro_web', 'root', '');
  //Db::connect('wm138.wedos.net', 'd155086_findbyt', 'w155086_findbyt', 'WQgtnvB3'); //adresa databáze
  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  //$vysledek=Db::query('SELECT * FROM nabidky LIMIT 1000');
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky WHERE price<=400000 ORDER BY price DESC;");

  echo "<table>";
  for($x=0; $x<mysqli_num_rows($vysledek); $x++){
    echo '<tr>';
    $radek=mysqli_fetch_array($vysledek);
    for($y=0; $y<mysqli_num_fields($vysledek); $y++){

      echo "<td>".$radek[$y]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
