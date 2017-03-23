<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listChannels
	
	// Kanäle abrufen:
	
	# alle Kanäle
	$ret = $client->listChannels();
	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

