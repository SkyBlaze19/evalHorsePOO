<?php

use App\Controller\Human;
use App\Controller\Manager;
use App\Controller\Stable;

require_once __DIR__ . "/../src/app.php";

$MonHumain = new Human("Théo", 21, "7", "chemin des quairières", "14763", "Bamervor");
$Manager1 = new Manager("Claire", 36, "3", "Impasse du puits", "76500", "Honyeux", "Animaux");
$EcurieBeaute = new Stable("Ecurie Beaute Fleury", "19", "Rue des ardennes", "14750", "Saint-contest");

echo $MonHumain;
echo "\n\nLe manager :\n" . $Manager1;
echo "\n\nL'écurie :\n" . $EcurieBeaute;