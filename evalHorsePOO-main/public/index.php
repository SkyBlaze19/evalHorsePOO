<?php

use App\Controller\Class\Human;
use App\Controller\Class\Manager;
use App\Controller\Class\Stable;


require_once __DIR__ . "/../src/app.php";

//$MonHumain = new Human("Théo", 21, "7", "chemin des quairières", "14763", "Bamervor");
$MonHumainManager = new Manager("Théo", 21, "7", "chemin des quairières", "14763", "Bamervor", "Administration");
$Manager1 = new Manager("Claire", 36, "3", "Impasse du puits", "76500", "Honyeux", "Animaux");
$EcurieBeaute = new Stable("Ecurie Beaute Fleury", "19", "Rue des ardennes", "14750", "Saint-contest");

//echo $MonHumain;
echo $MonHumainManager;
echo "\n\nLe manager :\n" . $Manager1;
echo "\n\nL'écurie :\n" . $EcurieBeaute;