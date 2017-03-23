<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#savePerson
	
	// Neue Person anlegen
	
	$person = new StdClass();
	
	$person->name = 'Pfarrer Soaper';
	$person->email = 'dummy@example.de';
	$person->contact = "Tel: 09998 8887";
	
	$person->externalId = 'extern-87666';
	
	$ret = $client->savePerson($person);
	
	var_dump($ret);

	
	# Über id
	$newperson = $client->getPerson($ret->id);
	var_dump($newperson);
	
	# Über externalId
	$newperson2 = $client->getPerson($person->externalId, true);
	var_dump($newperson2);
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

