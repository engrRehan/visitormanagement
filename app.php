<?php 

require __DIR__.'/vendor/autoload.php';
$client= new \Google_Client();
$client->setApplicationName('SheetApp');
$client->setScope([\Google_Service_Sheets::SPREADSHEETS]);
$client->$setAccessType('offline');
$client->setAutoConfig(__DIR__.'/sheets_api_secret.json');
$service=new Google_Service_Sheet($client);
$spreadsheetId='';
