<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listPlaces
	
	// Veranstaltungsorte abrufen:
	
	# alle Orte
	$ret = $client->listPlaces();
	print_r($ret);
	
	# ein Ort
	$ret = $client->getPlace($ret[0]->id);
    print_r($ret);
	
	/*
	# exteranlaId
	$ret = $client->getPlace('9876',true);
	var_dump($ret);
	
	# Fehler
	$ret = $client->getPlace(987878787);
	var_dump($ret);
	*/
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

