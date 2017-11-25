<html>
<head>
<meta charset="utf-8" />
</head>
<?php
  //include "funkce.php";
  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky LIMIT 50;");
  echo "{";
    echo "'Nabidky' : [";
  $nazvypoli=mysqli_fetch_fields($vysledek);
  $xmax=mysqli_num_rows($vysledek);
  for($x=0; $x<$xmax; $x++){
    $radek=mysqli_fetch_array($vysledek);
    for($y=0; $y<mysqli_num_fields($vysledek); $y++){
      echo "{";
      echo "'".$nazvypoli[$x]->name."':";
      echo $radek[$y];
      if($x+1!=mysqli_num_fields($vysledek)){
        echo ",";
      }
      echo "}";
    }

  }
  echo "]}";
?>
</html>
