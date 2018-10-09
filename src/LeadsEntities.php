<?php
namespace Src;


class LeadsEntities {
     public $type;
     public $relationships;   
     public $attributes;

     public function __construct( Attributes $attributes , Relationships $relationships) {
         $this->type = 'leads';
         $this->attributes = $attributes;
         $this->relationships = $relationships;
     }
     
}
