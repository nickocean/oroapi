<?php

namespace Src;


class CallsAttributes {

	public $subject;
	public $phoneNumber;

	public function __construct($subject, $phoneNumber) {
		$this->subject = $subject;
		$this->phoneNumber = $phoneNumber;
	}
}