<?php

namespace Src;

class Relationships {
        
        public function addOwner($id) {
           $this->owner=['data'=>new Entities('users',$id)];
        }
        
        public function addOrganization($id) {
           $this->organization=['data'=>new Entities('organizations',$id)];
        }
        
        public function addStatusLead($status) {
           $this->status=['data'=>new Entities('leadstatuses',$status)];
        }
        
        public function addSourceLead($id) {
           $this->source=['data'=>new Entities('leadsources',$id)];
        }
}
