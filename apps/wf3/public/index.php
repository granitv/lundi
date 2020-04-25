<?php

use App\DevTools;
use App\LibsLoader;
use App\Models\Armor;
use App\Models\Joueur;
use App\Models\Stats;



$loader = require '../vendor/autoload.php';

$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();
$tools = new DevTools();

$armor = new Armor();
$armor->name="Armure de sang mélé";
$armor->armorClass=15;



/*
 *
 * classe de personnage
 *
 * Choisi par le joueur
 * name, classe, race, alignement
 * stats : force, endurance, agilité, intelligence, charisme, chance
 *
 *
 * Calculé en fonction des choix du joueur
 * PV : chiffre random entre 10 et 20 + 1,2 x endurance
 * mana : chiffre random entre 10 et 30 + 1,3 x intelligence
 * points d'armure : Classe d'Armure de l'armure portée + endure x 1,1
 *
 */

$player = new Joueur();
$player->name = "Duzboob";
$player->classe = "Paladin";
$player->race = "Elfe des prairies de nuit";
$player->alignement = "loyal bon";
$player->armor = $armor;


$playerStats = new Stats();
$playerStats->force = 7;
$playerStats->endurance = 7;
$playerStats->agility = 5;
$playerStats->intelligence = 5;
$playerStats->charism = 6;
$playerStats->luck = 5;

$player->stats = $playerStats;

$player->calculateHps();
$player->calculateMps();
$player->calculateAps();

$tools->prettyVarDump($player);





