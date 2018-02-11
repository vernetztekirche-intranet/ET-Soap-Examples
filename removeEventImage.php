<?php
include('config.php');

try {
	
	// Löscht ein Bild von einer Veranstaltung
	$eventid = '1330527';
	$external = false;
	
	$ret = $client->removeEventImage($eventid, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}