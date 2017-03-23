<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#deletePerson
	
	// Person löschen:
	
	# mit externalId
	$ret = $client->deletePerson('extern-87666',true);
	var_dump($ret);
	
	/*
	# nicht existent
	$ret = $client->deletePerson(2342343);
	var_dump($ret);
	
	# Fremde Person -> Fehler
	$ret = $client->deletePerson(807);
	var_dump($ret);
	
	# mit Veranstaltungen
	$ret = $client->deletePerson(4);
	var_dump($ret);
	*/
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

