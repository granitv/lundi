<?php

use App\DevTools;
use App\LibsLoader;
use App\Models\Voiture;

$loader = require '../vendor/autoload.php';

$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();

$voitures = [
  ['model' => '208',
      'mark' => 'Peugeot',
      'price' => 10000,
      'TVA' => 20
  ],
    [
        'model' => 'duster',
        'mark' => 'Dacia',
        'price' => 15000,
        'TVA' => 20
    ]
];

$carsObjs = [];

$tools = new DevTools();


foreach ($voitures as $voiture) {
    $carObj = new Voiture();
    $carObj->hydrateCar($voiture['mark'], $voiture['model'], $voiture['price'], $voiture['TVA']);
    array_push($carsObjs, $carObj);
}

$tools->prettyVarDump($carsObjs);

