<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#deletePlace
	
	// Ort Löschen:
	
	# mit externalId
	$ret = $client->deletePlace('extern-543453',true);
	var_dump($ret);
	
	/*
	# nicht existent
	$ret = $client->deletePlace(2342343);
	var_dump($ret);
	
	# Fremder Ort -> Fehler
	$ret = $client->deletePlace(234);
	var_dump($ret);
	
	# mit Veranstaltungen
	$ret = $client->deletePlace(12214);
	var_dump($ret);
	
	*/
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

