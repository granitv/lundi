<?php

use App\ClasseTest;
use App\DevTools;
use App\LibsLoader;

$loader = require '../vendor/autoload.php';

$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();


$monTableau = ['hadrien', 'julien', 'phillipe', 'maxime'];
$tableauDeux = ['Jules', 'Giles', 'Thomas', 'Luc', 'Theo'];

$classeHadrien = new ClasseTest('Hadrien', 31);
$classeNoemie = new ClasseTest('Noemie', 29);
$classeHadrien->age = 45;


$devTools = new DevTools();

$devTools->prettyVarDump($monTableau);
$devTools->prettyVarDump($tableauDeux);
$devTools->prettyVarDump($classeNoemie);
$devTools->showArrayFirstElement($monTableau);
$devTools->showArrayElementAtIndex($monTableau, 2);
