<html>

  <body>
<?php
  header('content-type: text/html; charset=utf-8');
  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  mysqli_query($link,"SET NAMES utf8;");
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky ORDER BY uzitna_plocha;");
  $bytu=mysqli_num_rows($vysledek);
  for($x=0; $x<50; $x++){
      $radek=mysqli_fetch_array($vysledek);
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
      <a href="'.$radek[1].'" class="special">'.$radek[1].'</a>
      </article>';
  }
 ?>
</body>
</html>
