<?php
include('config.php');

try {
	
	// Fügt einen Termin zu einem Stammdatensatz hinzu. Dadurch ensteht eine "Reihe"
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#addEtDate
	
	#mit eventid
	$date = new StdClass();
	$date->mode = "vonbis";
	$date->start = "2017-04-16 14:32:00";
	$date->end = "";
	$date->eventid = 1280784; 
	$date->subtitle = "Mit Kirchenkaffee";
	$date->externalid = "extern-656777";
	
	#$ret = $client->addEtDate($date  );
	#var_dump($ret);
	
	
	#mit externalid
	$date = new StdClass();
	$date->mode = "vonbis";
	$date->start = "2017-04-18 12:39:00";
	$date->end = "";
	$date->eventid = 'extern-54321'; # externalid des events
	$date->subtitle = "Ohne Kirchenkaffee";
	$date->externalid = "extern-656777"; # externalid für date
	
	$ret = $client->addEtDate($date, true  );
	var_dump($ret);
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

