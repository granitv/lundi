<?php


namespace App\Models;


class Voiture
{

    public $mark;
    public $model;
    public $price;
    public $VAT;
    public $fullPrice;


    public function hydrateCar($mark, $model, $price, $VAT) {
        $this->mark = $mark;
        $this->model = $model;
        $this->price = $price;
        $this->VAT = $VAT;
        $this->fullPrice = $this->getPriceWithTaxes();
    }

    private function getPriceWithTaxes() {
        return ($this->price + $this->price * ($this->VAT / 100));
    }


}