<?php
include('config.php');

try {
	
	// Fügt ein Bild zu einer Veranstaltung hinzu
	
	$imgurl = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Kath._Kirche_Helminghausen.jpg/768px-Kath._Kirche_Helminghausen.jpg';
	$eventid = '879879';
	$external = true;
	
	$ret = $client->addEventImage($eventid, $imgurl, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}