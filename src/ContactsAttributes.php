<?php

namespace Src;


class ContactsAttributes extends Attributes {

	public $primaryPhone;
	public $gender;
	public $birthday;
	public $description;
	public $fax;
	public $skype;
	public $facebook;
	public $googlePlus;

	public function __construct(
		$firstName, $lastName, $emails, $phones
	) {
		parent::__construct($firstName, $lastName, $emails, $phones );

		$this->primaryPhone = $phones->phone;
		/*$this->gender = $gender;
		$this->birthday = $birthday;
		$this->description = $description;
		$this->fax = $fax;
		$this->skype = $skype;
		$this->facebook = $facebook;
		$this->googlePlus = $googlePlus;*/
	}
}