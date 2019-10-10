<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listResources
	
	// Ressourcen abrufen:
	
	# alle Ressourcen
	$ret = $client->listResources();
	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

