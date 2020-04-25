<?php


namespace App\Models;


class Joueur
{

    public $name;
    public $classe;
    public $race;
    public $alignement;

    public $stats;

    public $hp;
    private $mp;
    public $ap;

    public $armor;


    public function calculateHps(){
        $this->hp = rand(10, 20) + ($this->stats->endurance * 1.2);
    }

    public function calculateMps(){
        $this->mp = rand(10, 30) + ($this->stats->intelligence * 1.3);
    }

    public function calculateAps(){
        $this->ap = $this->armor->armorClass + ($this->stats->endurance * 1.1);
    }

    public function calculateDamagesGiven(){
        return (($this->stats->force * 0.5) + rand(0,3));
    }

    public function takeDamages($damages) {
        $this->hp = $this->hp - $damages;
    }
}