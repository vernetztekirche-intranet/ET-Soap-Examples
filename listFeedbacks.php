<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#listFeedbacks
	
	// Rückmeldungen abrufen:

    #$id = 4333418;
    $id = 'soapexternal1234';

	$ret = $client->listFeedbacks($id, true);

	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

