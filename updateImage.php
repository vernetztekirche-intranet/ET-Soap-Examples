<?php
include('config.php');

try {
	
	// Aktualisiert den Bildnachweis und die Beschreibung eines Bildes
	
	$imageid = '7cacabba-8fb8-48e0-abf1-39fd02554775.png';
	$caption = 'Bildnachweis geändert';
    $description = 'Geänderte Beschreibung';
    $license = 3;
	
	$ret = $client->updateImage( $imageid, $caption, $description, $license );
	print_r($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}