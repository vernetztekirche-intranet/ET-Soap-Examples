<?php
header('Content-Type: text/plain; charset=utf-8');

# Bitte ggfs. anpassen
$activeConfig = 1;

switch($activeConfig){
	// Lokale Entwicklung
	case 1:
		$url = 'http://ets.geyer.dev/app_dev.php/soap';
		$apiKey  = '58c1818c6e4cf3.33261127';
		$vid = 3;
		break;
	case 2:
		// EKBO 
		$url = 'http://www.ekbo-termine.de/soap';
		$apiKey  = 'Ihr Api-Key'; # Siehe: http://www.ekbo-termine.de/Admin/apidoc
		$vid = 0;  # Die zum Api-Key passende Veranstalter-ID
		break;
	case 3:
		// EKVW 
		$url = 'http://www.veranstaltungen-ekvw.de/soap';
		$apiKey  = 'Ihr Api-Key'; # Siehe: http://www.veranstaltungen-ekvw.de/Admin/apidoc
		$vid = 0;  # Die zum Api-Key passende Veranstalter-ID
		break;
	case 4:
		// EKIR 
		$url = 'http://termine.ekir.de/soap';
		$apiKey  = 'Ihr Api-Key'; # Siehe: http://termine.ekir.de/Admin/apidoc
		$vid = 0;  # Die zum Api-Key passende Veranstalter-ID
		break;
	default:
		break;
	
	
}


$client = new SoapClient($url . "?WSDL" , array('cache_wsdl' => WSDL_CACHE_NONE));

$auth = new StdClass;
$auth->apiKey = $apiKey; 
$auth->vid = $vid;
$header = new SoapHeader($url, "APIValidate", $auth);
$client->__setSoapHeaders($header);