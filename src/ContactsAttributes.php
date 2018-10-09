<?php

namespace Src;


class ContactsAttributes extends Attributes {

	public $gender = '';
	public $birthday = '';
	public $description = '';
	public $fax = '';
	public $skype = '';
	public $facebook = '';
	public $googlePlus = '';

	public function __construct(
		$firstName, $lastName, $emails, $phones, $gender, $birthday, $description, $fax, $skype, $facebook, $googlePlus
	) {
		parent::__construct( $firstName, $lastName, $emails, $phones );

		$this->gender = $gender;
		$this->birthday = $birthday;
		$this->description = $description;
		$this->fax = $fax;
		$this->skype = $skype;
		$this->facebook = $facebook;
		$this->googlePlus = $googlePlus;
	}
}