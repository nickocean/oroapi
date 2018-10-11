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

/*$attributes =new LeadsAttributes(
		'Antony Hopkins',
        'firstName_'.rand(1000, 2000),
        'lastName_'.rand(1000, 2000),
        new EmailsEntities(rand(100,200).'Email@gmail.com'),
        new PhonesEntities(rand(199999999999, 999999999999))
        );
$relationships = new Relationships();
$relationships->addOwner('1');
$relationships->addOrganization('1');
$lead = new NewEntities( 'leads', $attributes, $relationships);
$crm = new OroRequest($url, $userName ,$userApiKey);
$resp=$crm->post('/index.php/api/leads', $lead);
debug($resp);*/



  // GET method
/*$crm = new OroRequest($url, $userName, $userApiKey);
$response = $crm->get('/index.php/api/calls/', 5);
debug($response);*/

  // POST new calls
$attrs = new CallsAttributes('Test', rand(1000000000,200000000000));
$relationships = new CallsRelationships;
$relationships->addStatus('completed');
$relationships->addDirection('outgoing');
$relationships->addActivityTargets('119', '12', '24');
$call = new NewEntities('calls', $attrs, $relationships);
$crm = new OroRequest($url, $userName, $userApiKey);
$resp = $crm->post('/index.php/api/calls', $call);
debug($call);
debug($resp);


 // PUT lead with id = 118

/*$attributes =new ContactsAttributes(
	'firstName_'.rand(1000, 2000),
	'lastName_'.rand(1000, 2000),
	new EmailsEntities(rand(100,200).'Email@gmail.com'),
	new PhonesEntities(rand(199999999999, 999999999999))
);
$relationships = new Relationships();
$relationships->addOwner('1');
$relationships->addOrganization('1');
$contact = new NewEntities( 'contacts', $attributes, $relationships);

$crm = new OroRequest($url, $userName ,$userApiKey);
$resp=$crm->put('/index.php/api/contacts/', 80, $contact);
debug($resp);*/

