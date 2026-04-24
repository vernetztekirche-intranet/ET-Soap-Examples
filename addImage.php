<?php
include('config.php');

try {
	
	// Fügt ein Bild zur Mediathek hinzu
	
	#$imgurl = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Kath._Kirche_Helminghausen.jpg/768px-Kath._Kirche_Helminghausen.jpg';
    $imgurl = 'https://www.bayern-evangelisch.de/img/GettyImages-neujahr.jpg';
	$caption = 'Getty Images';
    $description = '2026!';
    $license = 4;
	
	$ret = $client->addImage( $imgurl, $caption, $description, $license );
	print_r($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}