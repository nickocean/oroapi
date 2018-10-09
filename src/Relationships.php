<?php

namespace Src;

class Relationships {

	public $owner;
	public $organization;
	public $status;
	public $source;
	public $method;
	public $assignedTo;
	public $reportsTo;
	public $addresses;
	public $groups;
	public $accounts;
	public $createdBy;
	public $updatedBy;
	public $defaultInAccounts;
	public $picture;
	public $contact;
	public $opportunities;
	public $compaign;
	public $customer;
	public $account;

        public function addOwner($id) {
           $this->owner=['data'=>new Entities('users',$id)];
        }
        public function addOrganization($id) {
           $this->organization=['data'=>new Entities('organizations',$id)];
        }
        public function addStatus($status) {
           $this->status=['data'=>new Entities('statuses',$status)];
        }
        public function addSource($id) {
           $this->source=['data'=>new Entities('sources',$id)];
        }
		public function addMethod($id) {
			$this->owner=['data'=>new Entities('method',$id)];
		}
		public function addAssignedTo($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addReportsTo($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addAddresses($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addGroups($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addAccounts($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addCreatedBy($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addUpdatedBy($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addDefaultInAccounts($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addPicture($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addContact($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addOpportunities($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addCompaign($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addCustomer($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
		public function addAccount($id) {
			$this->owner=['data'=>new Entities('users',$id)];
		}
}
