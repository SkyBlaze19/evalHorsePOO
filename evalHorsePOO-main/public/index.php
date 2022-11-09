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

// Possibilités de couleurs 
// ['Alzan', 'Bai', 'Pie', 'Grey', 'White']

$georgeShetland = new Shetland(5, "Georges", "male", "Bai", 50);
$camillePoney = new Poney(0, "Camille", "femelle", "Alzan", 70);
$jeanHorse = new Horse(1, "Jean", "male", "Pie", 90);

// Ici les cas ou les erreurs sont detectés (Décommenter ligne par ligne pour tester)
//$patriciaShetland = new Shetland(1, "Patricia", "femelle", "Bonjour", 45);
//$patriciaShetlandB = new Shetland(-7, "Patricia", "femelle", "Bai", 45);

echo "\n\n".$georgeShetland;
echo "\n\n".$camillePoney;
echo "\n\n".$jeanHorse;



