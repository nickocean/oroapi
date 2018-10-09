<?php

namespace Src;


class LeadsAttributes extends Attributes {

	public $companyName;
	public $website;
	public $numberOfEmployees;
	public $notes;


	public function __construct(
		$name, $firstName, $lastName, $emails, $phones
	) {
		parent::__construct($name, $firstName, $lastName, $emails, $phones);

		/*$this->companyName = $companyName;
		$this->website = $website;
		$this->numberOfEmployees = $numberOfEmployees;
		$this->notes = $notes;*/
	}
}