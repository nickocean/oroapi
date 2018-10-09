<?php

namespace Src;


class ContactsAttributes extends Attributes {

	public $gender;
	public $birthday;
	public $description;
	public $fax;
	public $skype;
	public $facebook;
	public $googlePlus;

	public function __construct(
		$name, $firstName, $lastName, $emails, $phones
	) {
		parent::__construct( $name, $firstName, $lastName, $emails, $phones );

		/*$this->gender = $gender;
		$this->birthday = $birthday;
		$this->description = $description;
		$this->fax = $fax;
		$this->skype = $skype;
		$this->facebook = $facebook;
		$this->googlePlus = $googlePlus;*/
	}
}