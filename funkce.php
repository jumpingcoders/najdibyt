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
    $link=mysqli_connect("wm138.wedos.net", "w155086_findbyt", "WQgtnvB3", "d155086_findbyt");
    $vysledek=mysqli_query($link,"SELECT Response FROM geocache WHERE Query = '$input';");
    if(mysqli_num_rows($vysledek)>0){
      $output=mysqli_fetch_array($vysledek)[0];
    }else{
      $request="http://dev.virtualearth.net/REST/v1/Locations?q=$input&o=xml&key=$apiKeyBing";
      //echo $request;
      $output=file_get_contents($request);
      mysqli_query($link,"INSERT INTO geocache VALUES('$input','$output');");
    }

    $response = new SimpleXMLElement($output);

    $latlon[0] =$response->ResourceSets->ResourceSet->Resources->Location->Point->Latitude;
    $latlon[1] =$response->ResourceSets->ResourceSet->Resources->Location->Point->Longitude;

    return $latlon;

  }

  function llvzdalenost($lat1,$lon1,$lat2,$lon2){
        loguj("byla zavolana funkce vzdalenost($lat1,$lon1,$lat2,$lon2)",1,"Funkce");

        $R=6378;
        $lat2=deg2rad($lat2);
        $lat1=deg2rad($lat1);
        $dLat=deg2rad($lat1-$lat2);
        $dLon=deg2rad($lon1-$lon2);
        $a=sin($dLat/2)*sin($dLat/2)+sin($dLon/2)*sin($dLon/2)*cos($lat1)*cos($lat2);
        $c=2*atan2(sqrt($a),sqrt(1-$a));
        //return rand(1,100);
        $vzdalenost=$R*$c;
        return $vzdalenost;
    }

  function vzdalenost($lokalita, $desiredLokalita){
    global $vahaVzdalenost;
    $latlon1=geocode($lokalita);
    $latlon2=geocode($desiredLokalita);
    return llvzdalenost($latlon1[0],$latlon1[1],$latlon2[0],$latlon2[1])*$vahaVzdalenost;
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
