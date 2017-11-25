<?php

  $vahaVzdalenost=100;
  $vahaCas=200;
  $vahaVek=50;
  $vahaVelikost=100;
  $vahaCena=500;

  function vzdalenost($lokalita, $desiredLokalita){

    return 10;
  }

  function casDoPrace($lokalita, $prace){

    return 10;
  }

  function vek($adresaBytu,$desiredVek){

    return 10;
  }

  function velikostBytu($velikost, $desiredVelikost){

    return -abs($velikost-$desiredVelikost)*$vahaVelikost;
  }

  function cena($cena, $desiredCena){

    return ($desiredCena-$cena)*$vahaCena;
  }


?>
