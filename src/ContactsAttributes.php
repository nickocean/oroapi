<?php

namespace Src;


class ContactsAttributes extends Attributes {

	public $gender = null;
	public $birthday = null;
	public $description = null;
	public $fax = null;
	public $skype = null;
	public $facebook = null;
	public $googlePlus = null;

	public function __construct(
		$name, $firstName, $lastName, $emails, $phones, $gender, $birthday, $description, $fax, $skype, $facebook, $googlePlus
	) {
		parent::__construct( $name, $firstName, $lastName, $emails, $phones );

		$this->gender = $gender;
		$this->birthday = $birthday;
		$this->description = $description;
		$this->fax = $fax;
		$this->skype = $skype;
		$this->facebook = $facebook;
		$this->googlePlus = $googlePlus;
	}
}