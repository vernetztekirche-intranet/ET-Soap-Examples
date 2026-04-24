<?php
include('config.php');

try {
	
	// Fügt ein Bild zur Mediathek hinzu
    $path = 'Bilder/RedSoap.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $imgdata = 'data:image/' . $type . ';base64,' . base64_encode($data);

    $caption = 'Lummi.ai';
    $alttag = 'Seife mit Buchstaben';
    $license = 5;
	
	$ret = $client->addImageAsEncodedString( $imgdata, $caption, $alttag, $license );
	print_r($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}