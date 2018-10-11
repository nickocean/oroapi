<?php

namespace Src\Attributes;


class Attributes {

	public $firstName;
	public $lastName;
	public $primaryEmail;
	public $emails;
	public $phones;

	public function __construct(
		$firstName, $lastName, $emails, $phones
	) {
		$this->emails       = [ $emails ];
		$this->phones       = [ $phones ];
		$this->firstName    = $firstName;
		$this->lastName     = $lastName;
		$this->primaryEmail = $emails->email;
	}
}