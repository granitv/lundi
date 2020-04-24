<?php

use App\DevTools;
use App\LibsLoader;
use App\Models\Section;
use App\Models\Student;


$loader = require '../vendor/autoload.php';

$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();

$tools = new DevTools();

$students = [

    [
        "name" => "Hadrien",
        "age" => 31,
        "section" => "CE1"
    ],
    [
        "name" => "Julien",
        "age" => 33,
        "section" => "CE1"
    ],
    [
        "name" => "Theo",
        "age" => 20,
        "section" => "CP"
    ],
    [
        "name" => "Samantha",
        "age" => 30,
        "section" => "CE2"
    ],
    [
        "name" => "Emilie",
        "age" => 24,
        "section" => "CE2"
    ],
    [
        "name" => "Vladimir",
        "age" => 64,
        "section" => "CM2"
    ],
    [
        "name" => "Phillipe",
        "age" => 47,
        "section" => "CM2"
    ]

];


/*
 * Faire un algo qui va créer un école en fonction des élèves du tableau : Si un élève est dans une section et que cette section n'existe pas encore, la créer,
 * sinon ajouter cet élève a la section
 * chaque élève doit êre un objet
 * chaque section est un objet qui contient un tabeau d'objets élèves
 */

    $sectionsLabels = [];
    $studentsObjs = [];
    $sections = [];

foreach($students as $student) {
        $studentObj = new Student();
        $studentObj->name = $student['name'];
        $studentObj->age = $student['age'];
        $studentObj->section = $student['section'];
        array_push($studentsObjs, $studentObj);
        if (!in_array($student['section'], $sectionsLabels)) {
            array_push($sectionsLabels, $student['section']);
        }
    }
    foreach ($sectionsLabels as $label) {
        $section = new Section();
        $section->name = $label;
        foreach ($studentsObjs as $student) {
            if($student->section === $section->name) {
                array_push($section->students, $student);
            }
        }
        array_push($sections, $section);
    }
    $tools->prettyVarDump($sections);