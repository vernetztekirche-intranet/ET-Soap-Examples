<?php
include('config.php');

try {
	
	// Fügt einen Wert zu einem eigenen Formularfeld hinzu
    $field = new \StdClass();

    $field->value = "Mein neuer Wert";
    $field->fieldid = 12;
    $field->eventid = 1405042;

    $external = false;

	$ret = $client->saveField($field, $external );
	var_dump($ret);
	
	
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}