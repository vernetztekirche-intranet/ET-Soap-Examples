<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listImages
	
	// Bilder abrufen:
	
	# alle Ressourcen
	$ret = $client->listImages();
	print_r($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

