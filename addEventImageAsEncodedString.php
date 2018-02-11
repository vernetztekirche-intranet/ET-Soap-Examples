<?php
include('config.php');

try {
	
	// Fügt ein Bild zu einer Veranstaltung hinzu
    $path = 'Logo_500.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $imgdata = 'data:image/' . $type . ';base64,' . base64_encode($data);

	$eventid = '1327062';
	$external = false;
	
	$ret = $client->addEventImageAsEncodedString($eventid, $imgdata, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}