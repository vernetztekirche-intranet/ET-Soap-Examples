<?php
include('config.php');

try {
	
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#getWebformResultsOfPeriod
	
	// Rückmeldungen eines Zeitraums abrufen:

    $start = '2022-10-25';
    $end = '2022-10-30';

	$ret = $client->getWebformResultsOfPeriod($start, $end);

    var_dump($ret);
    #foreach($ret as $item){
    #    var_dump(json_decode($item->values));
    #}
	#var_dump($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

