<?php

namespace Src;


class Attributes {

	public $name;
	public $firstName;
	public $lastName;
	public $primaryEmail;
	public $emails;
	public $phones;

	public function __construct(
		$name, $firstName, $lastName, $emails, $phones
	) {
		$this->name = $name;
		$this->emails       = [ $emails ];
		$this->phones       = [ $phones ];
		$this->firstName    = $firstName;
		$this->lastName     = $lastName;
		$this->primaryEmail = $emails->email;
	}
}