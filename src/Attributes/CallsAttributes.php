<?php

namespace Src\Attributes;


class CallsAttributes {

	public $subject;
	public $phoneNumber;

	public function __construct($subject, $phoneNumber) {
		$this->subject = $subject;
		$this->phoneNumber = $phoneNumber;
	}
}