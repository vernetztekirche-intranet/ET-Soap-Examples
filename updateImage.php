<?php
include('config.php');

try {
	
	// Aktualisiert den Bildnachweis und die Beschreibung eines Bildes
	
	$imageid = '1411a01f-ce71-4647-a556-14aaee1fbcce.jpg';
	$caption = 'Bildnachweis geändert';
    $description = 'Geänderte Beschreibung';
	
	$ret = $client->updateImage( $imageid, $caption, $description );
	print_r($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}