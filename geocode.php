<?php include "funkce.php"; ?>
<html>
<body>
  <form method="POST">
    <input name="vstup" />
    <input type="submit" />
  </form>
  <?php
    if(isset($_POST["vstup"])){
      echo geocode($_POST["vstup"])[0].",".geocode($_POST["vstup"])[1];
    }
?>
</body>
</html>
