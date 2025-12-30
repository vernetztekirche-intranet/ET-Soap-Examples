<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#getParameterValues
	
	// Verschiedene Parameter abrufen:
	
	$ret = $client->getParameterValues( 'eventtype' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'people' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'region' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'region2' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'region3' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'musickat' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'kat' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'placeregion' );
	print_r($ret);
	
	$ret = $client->getParameterValues( 'irgendwasUnsinniges' );
	print_r($ret);
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

