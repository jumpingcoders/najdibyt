<?php
  include "funkce.php";


  $cena=1000000;
  $lokalita="Smíchovské nádraží";
  $prace="Palackého Náměstí";
  $velikost=70;
  $scoreTreshold=0;



  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  //$vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  $vysledky=[];
  echo "<table border=\"1\"'>";
  $bytu=mysqli_num_rows($vysledek);
  $lowPrice=1000000000;
  for($x=0; $x<$bytu; $x++){
    //$skore[$x]=0;
    $skore[$x]=0;
    $radek=mysqli_fetch_array($vysledek);
    if($radek[4]<$lowPrice and $radek[4]!=0){
      $lowPrice=$radek[4];
    }

    $vysledky+=$radek;
    $skore[$x]+=vzdalenost($radek[3],$lokalita);
    //$skore[$x]+=vzdalenost($radek[3],$prace); //nahradit casDoPrace();
    //$skore[$x]+=casDoPrace($radek[3],$prace);
    //$skore[$x]+=vek($radek[3],$vek); //základní sídelní jednotka je divná věc. Also, to apíčko má absolutně megašpatný kvóty.
    //$skore[$x]+=velikostBytu($radek[12],$velikost);
    //$skore[$x]+=cena($radek[4],$cena);
    echo '<tr>';
    for($y=0; $y<mysqli_num_fields($vysledek); $y++){

      echo "<td style='background-color: pink;'>".$radek[$y]."</td>";
      echo "<th>$skore[$x]</th>";

    }
    echo "</tr>";
  }
  echo "</table>";
 ?>
