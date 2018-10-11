<?php
/**
 * Created by PhpStorm.
 * User: ДОМ
 * Date: 11.10.2018
 * Time: 13:09
 */

namespace Src\Relationships;


use Src\Entities;
use Src\Relationships;

class ContactsRelationships {

	public function addSource($id) {
		$this->source = ['data' => new Entities('contactsources', $id)];
	}
	public function addOwner($id) {
		$this->owner=['data'=>new Entities('users',$id)];
	}
	public function addAssignedTo($id) {
		$this->assignedTo=['data'=>new Entities('users',$id)];
	}
	public function addReportsTo($id) {
		$this->reportsTo=['data'=>new Entities('contacts',$id)];
	}
}