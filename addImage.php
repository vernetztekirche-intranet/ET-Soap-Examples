<?php
include('config.php');

try {
	
	// Fügt ein Bild zur Mediathek hinzu
	
	$imgurl = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Kath._Kirche_Helminghausen.jpg/768px-Kath._Kirche_Helminghausen.jpg';
    $imgurl = 'https://www.bayern-evangelisch.de/upload/frontpageslider/BuB-Tag-2025-MOTIV-RZ-Slider.jpg';
	$caption = 'gemeinfrei';
    $description = 'Buß und Bettag!';
	
	$ret = $client->addImage( $imgurl, $caption, $description );
	print_r($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}