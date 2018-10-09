<?php
namespace Src;


class Attributes {
    public    $name;    
    public    $firstName; 
    public    $lastName;
    public    $primaryEmail;
    public    $emails;

    public function __construct($name,$firstName,$lastName, $emails,$phones) {
        $this->emails=[$emails];
        $this->phones=[$phones];
        $this->name=$name;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->primaryEmail=$emails->email;
    }
}