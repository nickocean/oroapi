<?php

namespace Src;


class CallsRelationships {
	public $callStatus;
	public $direction;
	public $activityTargets;

	public function addStatus($id) {
		$this->callStatus = ['data' => new Entities('callstatuses', $id)];
	}

	public function addDirection($id) {
		$this->direction = ['data' => new Entities('calldirections', $id)];
	}

	public function addActivityTargets($userId, $contactId, $accountId) {
		$this->activityTargets = [
			'data' => [
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
		];
	}
}