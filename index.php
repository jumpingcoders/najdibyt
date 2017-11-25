<?php
   include "db/db.php";
   include "funkce.php";
   include "api.php";
   ?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>Najdi si byt</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
   </head>
   <body>
      <form method="POST">
         <div id="page-wrapper">
            <header id="header" class="alt">
               <h1><a href="index.html">Najdi si byt</a></h1>
               <nav>
                  <a href="#menu">Menu</a>
               </nav>
            </header>
            <nav id="menu">
               <div class="inner">
                  <h2>Menu</h2>
                  <ul class="links">
                     <h1>TADY NIC NENÍ, PROTOŽE JSME LÍNÍ :P</h1>
                  </ul>
                  <a href="#" class="close">Close</a>
               </div>
            </nav>
            <section id="banner">
               <div class="inner">
                  <div class="logo"><span class="icon fa-diamond"></span></div>
                  <h2>Najdi si byt</h2>
                  <p>Najdi si svůj vysněný byt, třeba protože nemáš rád důchodce. Jednoduchá appka byla vytvořena během hackhathonu <a href="https://hacknismichov.cz">Hackni Smíchov</a>.</p>
               </div>
            </section>
            <section id="wrapper">
               <section id="one" class="wrapper spotlight style1">
                  <div class="inner">
                     <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                     <div class="content">
                        <h2 class="major">V jaké oblasti by jste rád bydlel/a?</h2>
                        <select name="localite" >
                          <option>Smíchov</option>
                          <option>Letná</option>
                          <option>Karlín</option>
                          <option>Vinohrady</option>
                          <option>Petřiny</option>
                        </select>
                        <br />
                     </div>
                  </div>
               </section>
               <section id="two" class="wrapper alt spotlight style2">
                  <div class="inner">
                     <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
                     <div class="content">
                        <h2 class="major">Velikost bytu v m<sup>2</sup></h2>
                        <input type="number" name="size" placeholder="Zadejte velikost bytu">
                     </div>
                  </div>
               </section>
               <section id="three" class="wrapper spotlight style3">
                  <div class="inner">
                     <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                     <div class="content">
                        <h2 class="major">Cena, kterou chceš dát za byt (v korunách)</h2>
                        <input type="number" name="price" placeholder="Zadejte maximální cenu bytu"><br />
                     </div>
                  </div><input type="submit">
      </form></section>
      
      </div>
      </div>
      </section>
      <section id="four" class="wrapper alt style1">
      <div class="inner">
      <div class="wrapper">
      <div class="inner">
      <h2>Výsledky vyhledávání:</h2>
      <section class="features">
      <?php
  $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
  mysqli_query($link,"SET NAMES utf8;");
  $uzitna_plocha=0;
  if(isset($_POST["size"])){
    $uzitna_plocha=$_POST["size"];
  }
  $vysledek=mysqli_query($link,"SELECT * FROM nabidky WHERE uzitna_plocha >= $uzitna_plocha ORDER BY uzitna_plocha;");
  $bytu=mysqli_num_rows($vysledek);
  for($x=0; $x<50; $x++){
      $radek=mysqli_fetch_array($vysledek);
        echo '<article>
        <h3 class="major">'.$radek[2].'</h3>
        <p>'.$radek[5].'</p>
        <p><b>Adresa/oblast bytu: </b>'.$radek[3].'</p>
        <p><b>Cena: </b>'.$radek[4].'Kč</p>
        <p><b>Užitná plocha: </b>'.$radek[12].'M<sup>2</sup></p>
        <p><b>Doplňující informace: </b>';
        if ($radek == "Ne") {
        	echo "Žádné";
        }
        else {
  	      if($radek[7]=="Ano"){echo "#Balkón ";}
  	      if($radek[8]=="Ano"){echo "#Bezbariérový ";}
  	      if($radek[9]=="Ano"){echo "#Parkování kousek od domu ";}
  	      if($radek[10]=="Ano"){echo "#Sklep ";}
  	      if($radek[11]=="Ano"){echo "#Terasa";}
  	  }
        echo '</p>
        <a href="'.$radek[1].'" class="special">Odkaz na nabídku</a>
        </article>';
    }
      echo '<article>
      <h3 class="major">'.$radek[2].'</h3>
      <p>'.$radek[5].'</p>
      <p><b>Adresa/oblast bytu: </b>'.$radek[3].'</p>
      <p><b>Cena: </b>'.$radek[4].'Kč</p>
      <p><b>Doplňující informace: </b>';
      if ($radek != "") {
      	echo "Žádné";
      }
      else {
	      if($radek[7]=="Ano"){echo "#Balkón ";}
	      if($radek[8]=="Ano"){echo "#Bezbariérový ";}
	      if($radek[9]=="Ano"){echo "#Parkování kousek od domu ";}
	      if($radek[10]=="Ano"){echo "#Sklep ";}
	      if($radek[11]=="Ano"){echo "#Terasa";}
	  }
      echo '</p>
      <a href="'.$radek[1].'" class="special">Odkaz na nabídku</a>
      </article>';
 ?>
      </section>
      </div>
      </div>
      </div>
      </section>
      </section>
      </div>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="js/api.js"></script>
   </body>
</html>
