<?php
  include "funkce.php";


  $cena=1000000;
  $lokalita="Praha";
  $velikost=70;




  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  //$vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  $vysledky=[];
  echo "<table>";
  $bytu=mysqli_num_rows($vysledek);
  $lowPrice=1000000000;
  for($x=0; $x<$bytu; $x++){
    //$skore[$x]=0;
    $skore[$x]=0;
    $radek=mysqli_fetch_array($vysledek);
    if($radek[4]<$lowPrice and $radek[4]!=0){
      $lowPrice=$radek[4];
    }
    echo '<tr>';

    $vysledky+=$radek;
    //$skore[$x]+=vzdalenost($radek[3],$lokalita);
    //$skore[$x]+=casDoPrace($radek[3],$prace);
    //$skore[$x]+=vek($radek[3],$vek);
    $skore[$x]+=velikostBytu($radek[12],$velikost);
    $skore[$x]+=cena($radek[4],$cena);
    for($y=0; $y<mysqli_num_fields($vysledek); $y++){

      echo "<td>".$radek[$y]."</td>";
    }
    echo "<th>$skore[$x]</th>";
    echo "</tr>";
  }
  echo "</table>";
 ?>
