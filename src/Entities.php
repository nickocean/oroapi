<?php

namespace Src;


class Entities {

	public $type;
	public $id;

	public function __construct($type, $id) {
		$this->type = $type;
		$this->id = $id;
	}
}