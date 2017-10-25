<?php

require './models/entites/Person.php';
require './models/entites/Clients.php';

include './vues/exo4.php';

$test = new Clients (['name'=>'Nom','surname'=>'Prenom','adress'=>'26 rue AAAAAA 59000 AAA']);

var_dump($test->getInfos());
