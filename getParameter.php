<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#getParameterValues
	
	// Verschiedene Parameter abrufen:
	
	$ret = $client->getParameterValues( 'eventtype' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'people' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'region' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'region2' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'region3' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'musickat' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'kat' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'placeregion' );
	var_dump($ret);
	
	$ret = $client->getParameterValues( 'irgendwasUnsinniges' );
	var_dump($ret);
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

