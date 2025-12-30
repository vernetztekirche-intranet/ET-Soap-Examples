<?php
include('config.php');

try {
	// http://handbuch.evangelische-termine.de/soap-api-dokumentation#saveEvent
	// Werte unten bitte anpassen
	
	$event = new StdClass();
	
	# ID des Veranstaltungstyps
	// Siehe /Admin/veranstaltungstypen
	$event->inputmaskid = 865;
	
	$event->externalid = 'extern-12345'; # date-externalId
	$event->eventexternalid = 'extern-54321'; # event
	
	// Die weiteren Werte müssen selbstverständlich je nach Veranstaltungstyp und Veranstalter angepasst werden:
	
	$event->title = "Gottesdienst (Soap-Test)";
	$event->subtitle = "mit Kirchenkaffee";
	$event->mode = 'vonbis';
	$event->start = "2026-02-01 09:38:00";
	$event->end = "0000-00-00 00:00:00";
	$event->placeid = 24;
	$event->status = 'ok';
	$event->eventtype = '2,3,6';
	$event->people = '5,10';
	$event->shortdescription = "Kurzbeschreibung";
	$event->longdescription = "Hier ist eine längere Beschreibug. Ohne HMTL\nMit Zeilenumbruch.";
	$event->link = "http://www.google.de";
	$event->kat = 5;
	$event->kat2 = 8;
	$event->email = 'dummy@example.de';
	$event->personid = '';
    $event->image = '6a7265aa-6e4b-40a4-8e3a-24439866e347.png';
	
	$event->regionid = 11;
    $event->subregionid = 403;
    $event->region2id = 4;
    $event->region3id = 2;
	
	$event->musickatid = '3-5-7';
	
	$event->textline1 = 'Textline 1';
	$event->textline2 = 'Textline 2';
	$event->textline3 = 'Textline 3';
	$event->textline4 = 'Textline 4';
	$event->textline5 = 'Textline 5';
	$event->textline6 = 'Textline 6';
	$event->textline7 = 'Textline 7';
	$event->textline8 = 'Textline 8';
	
	$event->textbox1 = 'Textbox 1';
	$event->textbox2 = 'Textbox 2';
	$event->textbox3 = 'Textbox 3';
	
	$event->menue1 = '110';
	$event->menue2 = '100,105';
	
	$event->yesno1 = 'Nein';
	$event->yesno2 = 'Nein';
	$event->yesno3 = 'Nein';
	
	$event->destination = 'extern';
	
	$event->feedbackid = 129;
	
	$event->highlight = 'high';
	
	$event->channels = '246'; #246

    $event->resources = '3,4';

	$event->professionid = 5;

	$event->lang = 'eng,ita';
	$event->access = '3,4';
	$event->statistik = "445";
 	
	
	$ret  = $client->saveEvent($event);
	
	print_r($ret);
	
} catch(SoapFault $exp){
	echo $exp->getMessage();
	
	print $client->__getLastResponse();
}

