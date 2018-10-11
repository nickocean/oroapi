<?php

namespace Src;


class CallsRelationships {
	public $callStatus;
	public $direction;
	public $activityTargets;

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

	public function addActivityTargets($userId, $contactId, $accountId) {
		$this->activityTargets = [
			'data' => [
			[
				'type' => 'users',
				'id' => $userId
			],
			[
				'type' => 'contacts',
				'id' => $contactId
			],
			[
				'type' => 'accounts',
				'id' => $accountId
			]
		]];
	}
}