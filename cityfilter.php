<html>

  <body>
    <form method="post">
      <input name="city" />
      <input type="submit" />
    </form>
<?php
  header('content-type: text/html; charset=utf-8');
  include "funkce.php";
  $dobra=0;
if(isset($_POST["city"])){
    $cityToShow=$_POST["city"];




  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  mysqli_query($link,"SET NAMES utf8;");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky ORDER BY uzitna_plocha;");
  //$vysledek=mysqli_query($link,"SELECT * FROM nabidky;");
  $vysledky=[];
  echo "<table border=\"1\"'>";
  $bytu=mysqli_num_rows($vysledek);
  for($x=0; $x<$bytu; $x++){
    try {
      $radek=mysqli_fetch_array($vysledek);
      $xml=getXml($radek[3]);
      $ahoj=new SimpleXMLElement($xml);
      //if($ahoj->ResourceSets->ResourceSet->Resources->Location->Address->AdminDistrict1==$cityToShow){
      if(llvzdalenost(geocode($radek[3]),geocode($radek[3]))){

          echo '<article>
          <h3 class="major">'.$radek[2].'</h3>
          <p>'.$radek[5].'</p>
          <p>'.$radek[3].'</p>
          <p>'.$radek[4].'Kč</p>
          <p>';
          if($radek[7]=="Ano"){echo "Balkón, ";}
          if($radek[8]=="Ano"){echo "Bezbariérový, ";}
          if($radek[9]=="Ano"){echo "Parkování kousek od domu, ";}
          if($radek[10]=="Ano"){echo "Sklep, ";}
          if($radek[11]=="Ano"){echo "Terasa.";}
          echo '</p>
          <a href="'.$radek[1].'" class="special">Link</a>
          </article>';
      }
    }
    catch(Exception $e) {
    }
    if(false){
      break;
    }

  }
  echo "</table>";
  }
 ?>

</body>
</html>
