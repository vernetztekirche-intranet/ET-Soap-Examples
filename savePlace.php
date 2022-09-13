<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#savePlace
	// Neuen Ort anlegen:
	// Werte ggfs. anpassen:
	
	$place = new StdClass();
	
	$place->name = 'St. Soap-Kirche';
	$place->kat = '10';
	$place->zip = '80636';
	$place->city = 'Nürnberg';
	$place->streetNr = 'Musterstr. 34';
	$place->destination = 'private';
	$place->notpublic = 0;
	$place->region = 404;
	$place->equip = [1,2,3];
	$place->kat2 = array(3,4);
	
	$place->externalId = 'extern-543453';

	$ret = $client->savePlace($place);
	
	var_dump($ret);
	
	// Neu angelegten Ort abrufen:
	
	# über id
	$newplace = $client->getPlace($ret->id);
	var_dump($newplace);
	
	# über externalId
	$newplace2 = $client->getPlace($place->externalId , true);
	var_dump($newplace2);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

