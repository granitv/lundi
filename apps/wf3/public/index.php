<?php

use App\Tools\DevTools;
use App\Tools\LibsLoader;
use App\Tools\DatabaseTools;

$loader = require '../vendor/autoload.php';

$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();
$tools = new DevTools();
$dbTools = new DatabaseTools("mysql", "poo", "root", "root");

$names = $dbTools->executeQuery("SELECT * FROM TEST");
$tools->prettyVarDump($names);




