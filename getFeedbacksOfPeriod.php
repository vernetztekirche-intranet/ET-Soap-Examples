<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#getFeedbacksOfPeriod
	
	// Rückmeldungen eines Zeitraums abrufen:

    $start = '2017-10-01';
    $end = '2017-10-10';

	$ret = $client->getFeedbacksOfPeriod($start, $end);

	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

