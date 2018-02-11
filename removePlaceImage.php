<?php
include('config.php');

try {
	
	// Löscht ein Bild von einem Veranstaltungsort
	$placeid = '10571';
	$external = false;
	
	$ret = $client->removePlaceImage($placeid, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}