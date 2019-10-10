<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#getFeedbacksOfPeriod
	
	// Rückmeldungen eines Zeitraums abrufen:

    $start = '2019-01-01';
    $end = '2019-01-15';

	$ret = $client->getFeedbacksOfPeriod($start, $end);

	var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

