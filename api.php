<?php

if (isset($_POST['ageGroup'])) {
	$ageGroup = $_POST['ageGroup'];
	$localite = $_POST['localite'];
	$size = $_POST['size'];
	$workAdress = $_POST['workAdress'];
	$timeWork = $_POST['timeWork'];
	$price = $_POST['price'];

	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n" .
            "APIKEY: f6716359e9b0d0b46afb1c47fd5b1081c9b1fc3c8e7b9762eafdda5584e5d3bb"
	    ]
	];

	$context = stream_context_create($opts);

	// Open the file using the HTTP headers set above
	$file = file_get_contents('https://developer.o2.cz/sociodemo/api/age/127752?ageGroup=' . $ageGroup . '&occurenceType=1&hour=10', false, $context);
	$json = json_decode($file, true);
}