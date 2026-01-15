<?php
include('config.php');

try {

// http://handbuch.evangelische-termine.de/soap-api-dokumentation#saveWebformPoll


$poll = new StdClass();
$poll->id = '369fbfe5-1aad-4f2d-b485-0d75aaa48298';
$poll->webformid = '7efe380c-1270-4b87-9029-ac745862b8e5';
$poll->name = 'Test über Soap2';
#$poll->start = '15.1.2026';
#$poll->end = '17.01.2026';


$ret = $client->saveWebformPoll($poll);

print_r($ret);



} catch(SoapFault $exp){
    echo $exp->getMessage();

    print $client->__getLastResponse();
}
