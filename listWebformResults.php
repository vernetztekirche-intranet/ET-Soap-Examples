<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listWebformResults
	
	// WebformResults abrufen:

    $id = 6173316;

	$ret = $client->listWebformResults($id, false);

    #$id = 4333370;

    #$ret = $client->listFeedbacks($id, false);

	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

