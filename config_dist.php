<?php

/**
 * Diese Datei in config.php umbenennen und Werte anpassen.
 */

header('Content-Type: text/plain; charset=utf-8');

# Bitte ggfs. anpassen
$activeConfig = 1;

switch($activeConfig){
	// Lokale Entwicklung
	case 1:
		$url = 'http://www.evangelische-termine.de/soap';
		$apiKey  = 'Ihr API-KEY';
		$vid = 3; # Ihre Veranstalter-ID
		break;
	case 2:

		break;
	default:
		break;
	
	
}

# Für Testzwecke:
$context = stream_context_create([
  'ssl' => [
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  ]
]);



$client = new SoapClient($url . "?WSDL" , array('cache_wsdl' => WSDL_CACHE_NONE,'stream_context' => $context));

$auth = new StdClass;
$auth->apiKey = $apiKey; 
$auth->vid = $vid;
$header = new SoapHeader($url, "APIValidate", $auth);
$client->__setSoapHeaders($header);