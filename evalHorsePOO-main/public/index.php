<?php

use App\Controller\Class\Human;
use App\Controller\Class\Manager;
use App\Controller\Class\Stable;
use App\Controller\Class\Animal;
use App\Controller\Class\Equine;
use App\Controller\Class\Shetland;
use App\Controller\Class\Horse;
use App\Controller\Class\Poney;


require_once __DIR__ . "/../src/app.php";

//$MonHumain = new Human("Théo", 21, "7", "chemin des quairières", "14763", "Bamervor");
$MonHumainManager = new Manager("Théo", 21, "7", "chemin des quairières", "14763", "Bamervor", "Administration", "Homme");
$Manager1 = new Manager("Claire", 36, "3", "Impasse du puits", "76500", "Honyeux", "Animaux", "Femme");
$EcurieBeaute = new Stable("Ecurie Beaute Fleury", "19", "Rue des ardennes", "14750", "Saint-contest");

//echo $MonHumain;
echo $MonHumainManager;
echo "\n\n" . $Manager1;
echo "\n\n" . $EcurieBeaute;