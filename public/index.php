<?php

require_once "../vendor/autoload.php";

use Src\LeadsAttributes;
use Src\ContactsAttributes;
use Src\EmailsEntities;
use Src\PhonesEntities;
use Src\Relationships;
use Src\OroRequest;
use Src\NewEntities;
use Src\CallsAttributes;
use Src\CallsRelationships;

function debug($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$userName = 'dev';
$userApiKey = '3dc80aa0c30f554de82af4ab3924d37316a998cc';
$url="http://oro.demo";


  // POST method adding new lead

$attributes =new LeadsAttributes(
		'Antony Hopkins',
        'firstName_'.rand(1000, 2000),
        'lastName_'.rand(1000, 2000),
        new EmailsEntities(rand(100,200).'Email@gmail.com'),
        new PhonesEntities(rand(199999999999, 999999999999))
        );
///////////////////
$relationships = new Relationships();
$relationships->addOwner('1');
$relationships->addOrganization('1');

$lead = new NewEntities( 'leads', $attributes, $relationships);

$crm = new OroRequest($url, $userName ,$userApiKey);
$resp=$crm->post('/index.php/api/leads', $lead);
debug($resp);

  // GET method basic usage
/*$crm = new OroRequest($url, $userName, $userApiKey);
$response = $crm->getAll('/index.php/api/leads');
debug($response);*/

  // POST new calls
/*$attrs = new CallsAttributes('Test', rand(1000000000,200000000000));
$relationships = new CallsRelationships;
$relationships->addStatus('completed');
$relationships->addDirection('outgoing');
$call = new NewEntities('calls', $attrs, $relationships);
$crm = new OroRequest($url, $userName, $userApiKey);
$resp = $crm->post('/index.php/api/calls', $call);
debug($resp);*/