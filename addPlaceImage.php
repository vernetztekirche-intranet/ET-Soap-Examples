<?php
include('config.php');

try {
	
	// Fügt ein Bild zu einem Veranstaltungsort hinzu
	
	$imgurl = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Kath._Kirche_Helminghausen.jpg/768px-Kath._Kirche_Helminghausen.jpg';
	
	$placeid = 25;
	$external = false;
	
	$ret = $client->addPlaceImage($placeid, $imgurl, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}