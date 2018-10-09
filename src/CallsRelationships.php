<?php

namespace Src;


class CallsRelationships {
	public $callStatus;
	public $direction;

	public function addStatus($id) {
		$this->callStatus = ['data' => new Entities('callstatuses', $id)];
	}

	public function addDirection($id) {
		$this->direction = ['data' => new Entities('calldirections', $id)];
	}
}