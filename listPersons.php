<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listPersons
	
	// Personen abrufen
	
	# alle Personen
	$ret = $client->listPersons();
	print_r($ret);
	
	# eine Person
	$ret = $client->getPerson($ret[0]->id);
	print_r($ret);
	
	/*
	# exteranlaId
	$ret = $client->getPerson('7418',true);
	print_r($ret);
	
	# Fehler
	$ret = $client->getPerson(987878787);
	print_r($ret);
	*/
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

