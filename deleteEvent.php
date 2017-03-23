<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#deleteEvent
	
	// Beispiel mit externalid
	
	$id = 'extern-656777';
	
	$ret = $client->deleteEvent( $id, true );
	var_dump($ret);
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

