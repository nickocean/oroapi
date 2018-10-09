<?php
namespace Src;


class LeadsEntities {
     public $type;
     public $relationships;   
     public $attributes;

     public function __construct($type, Attributes $attributes , Relationships $relationships) {
         $this->type = $type;
         $this->attributes = $attributes;
         $this->relationships = $relationships;
     }
     
}
