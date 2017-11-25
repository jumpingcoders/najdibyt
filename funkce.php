<?php

  $vahaVzdalenost=100;
  $vahaCas=200;
  $vahaVek=50;
  $vahaVelikost=100;
  $vahaCena=0.1;

  $apiKeyBing="Ap8yk5spOs-bTflHnHrCpCI-mT2Av7s7hrWPywr-4EE5MVQ-uq7pG48QgXYIeoiF";

  function geocode($input){
    global $apiKeyBing;

    $input=str_replace(" ","%20",$input);
    $request="http://dev.virtualearth.net/REST/v1/Locations?q=$input&o=xml&key=$apiKeyBing";
    //echo $request;
    $output=file_get_contents($request);
    //echo $vysledek;
    $response = new SimpleXMLElement($output);

// Extract data (e.g. latitude and longitude) from the results
  $latlon[0] =$response->ResourceSets->ResourceSet->Resources->Location->Point->Latitude;
  $latlon[1] =$response->ResourceSets->ResourceSet->Resources->Location->Point->Longitude;

    return $latlon;

  }

  function vzdalenost($lokalita, $desiredLokalita){

    return 10;
  }

  function casDoPrace($lokalita, $prace){

    return 10;
  }

  function vek($adresaBytu,$desiredVek){

    return 10;
  }

  function velikostBytu($velikostBytu, $desiredVelikost){
    global $vahaVelikost;
    return -abs($velikostBytu-$desiredVelikost)*$vahaVelikost;
  }

  function cena($cena, $desiredCena){
    global $vahaCena;
    $cenaValue=($desiredCena-$cena)*$vahaCena;
    return $cenaValue;
  }


?>
