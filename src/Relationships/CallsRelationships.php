<?php

namespace Src\Relationships;


class CallsRelationships {
	public $callStatus;
	public $direction;

	public function addStatus($id) {
		$this->callStatus = [
			'data' => [
				'type' => 'callstatuses',
				'id' => $id
			]
		];
	}

	public function addDirection($id) {
		$this->direction = [
			'data' => [
				'type' => 'calldirections',
				'id' => $id
			]
		];
	}

	public function addActivityTargets($contactId, $accountId, $leadId) {
		$this->activityTargets = [
			'data' => [
			[
				'type' => 'contacts',
				'id' => $contactId
			],
			[
				'type' => 'accounts',
				'id' => $accountId
			],
			[
				'type' => 'leads',
				'id' => $leadId
			]
		]];
	}
}