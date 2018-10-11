<?php

namespace Src\Attributes;


class LeadsAttributes extends Attributes {

	public $companyName;
	public $website;
	public $numberOfEmployees;
	public $notes;
	public $name;


	public function __construct(
		$name, $firstName, $lastName, $emails, $phones
	) {
		parent::__construct($firstName, $lastName, $emails, $phones);

		$this->name = $name;
		/*$this->companyName = $companyName;
		$this->website = $website;
		$this->numberOfEmployees = $numberOfEmployees;
		$this->notes = $notes;*/
	}
}