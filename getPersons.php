<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listPersons
	
	// Personen abrufen
	
	# alle Personen
	$ret = $client->listPersons();
	var_dump($ret);
	
	# eine Person
	$ret = $client->getPerson($ret[0]->id);
	var_dump($ret);
	
	/*
	# exteranlaId
	$ret = $client->getPerson('7418',true);
	var_dump($ret);
	
	# Fehler
	$ret = $client->getPerson(987878787);
	var_dump($ret);
	*/
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

