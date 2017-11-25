<?php



  function vzdalenost($lokalita, $prace){

  }



  $cenaDo=5000000;
  $lokalita="Praha";
  $velikostOd=60;




  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky WHERE price<=$cenaDo AND location LIKE '*$lokalita*' ORDER BY price;");
  //$vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  $skore
  echo "<table>";
  for($x=0; $x<mysqli_num_rows($vysledek); $x++){
    echo '<tr>';
    $radek=mysqli_fetch_array($vysledek);
    for($y=0; $y<mysqli_num_fields($vysledek); $y++){
      $skore[$x,]
      echo "<td>".$radek[$y]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
 ?>
