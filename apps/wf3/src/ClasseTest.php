<?php

namespace App;

class ClasseTest
{

    public $name;
    public $age;

    public function __construct($choosenName, $choosenAge = 41)
    {
     $this->name = $choosenName;
     $this->age = $choosenAge;
    }


}