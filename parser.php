<?php
  include "funkce.php";
  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  $vysledek=mysqli_query($link,"SELECT location FROM nabidky;");
  for($x=0; $x<mysqli_num_rows($vysledek); $x++){
    try {
      llvzdalenost(geocode(mysqli_fetch_array($vysledek),geocode(mysqli_fetch_array($vysledek))));
    }
    catch(Exception $e) {
      mysqli_query($link,"DELETE FROM FROM nabidky WHERE location='".mysqli_fetch_array($vysledek)."';");
      echo "Deleted<br />";
    }
  }
 ?>
