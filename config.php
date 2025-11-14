<?php
header('Content-Type: text/plain; charset=utf-8');

# Bitte ggfs. anpassen
$activeConfig = 1;

switch($activeConfig){
	// Lokale Entwicklung
	case 1:
		$url = 'https://web.ddev-et-elkb-media.orb.local/soap';
		$apiKey  = '58da1b33368e54.24164707';
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
    case 5:
        $url = 'http://www.evangelische-termine.de/soap';
        $apiKey  = '58da1b33368e54.24164707';
        $vid = 3;
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