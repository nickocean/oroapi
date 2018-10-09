<?php

namespace Src;

class Relationships {

	public $owner;
	public $organization;
	/*public $status;
	public $source;*/
	/*public $method;
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
	public $account;*/

        public function addOwner($id) {
           $this->owner=['data'=>new Entities('users',$id)];
        }
        public function addOrganization($id) {
           $this->organization=['data'=>new Entities('organizations',$id)];
        }
        public function addStatus($status) {
           $this->status=['data'=>new Entities('leadstatuses',$status)];
        }
        public function addSource($id) {
           $this->source=['data'=>new Entities('leadsources',$id)];
        }
		/*public function addMethod($id) {
			$this->method=['data'=>new Entities('method',$id)];
		}
		public function addAssignedTo($id) {
			$this->assignedTo=['data'=>new Entities('users',$id)];
		}
		public function addReportsTo($id) {
			$this->reportsTo=['data'=>new Entities('users',$id)];
		}
		public function addAddresses($id) {
			$this->addresses=['data'=>new Entities('users',$id)];
		}
		public function addGroups($id) {
			$this->groups=['data'=>new Entities('users',$id)];
		}
		public function addAccounts($id) {
			$this->accounts=['data'=>new Entities('users',$id)];
		}
		public function addDefaultInAccounts($id) {
			$this->defaultInAccounts=['data'=>new Entities('users',$id)];
		}
		public function addPicture($id) {
			$this->picture=['data'=>new Entities('users',$id)];
		}
		public function addContact($id) {
			$this->contact=['data'=>new Entities('users',$id)];
		}
		public function addOpportunities($id) {
			$this->opportunities=['data'=>new Entities('users',$id)];
		}
		public function addCompaign($id) {
			$this->compaign=['data'=>new Entities('users',$id)];
		}
		public function addCustomer($id) {
			$this->customer=['data'=>new Entities('users',$id)];
		}
		public function addAccount($id) {
			$this->account=['data'=>new Entities('users',$id)];
		}*/
}
