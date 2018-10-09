<?php

namespace Src;


class LeadsAttributes extends Attributes {

	public $name = '';
	public $companyName = '';
	public $website = '';
	public $numberOfEmployees = '';
	public $notes = '';


	public function __construct(
		$firstName, $lastName, $emails, $phones, $name, $companyName, $website, $numberOfEmployees, $notes
	) {
		parent::__construct($firstName, $lastName, $emails, $phones);

		$this->name = $name;
		$this->companyName = $companyName;
		$this->website = $website;
		$this->numberOfEmployees = $numberOfEmployees;
		$this->notes = $notes;
	}
}