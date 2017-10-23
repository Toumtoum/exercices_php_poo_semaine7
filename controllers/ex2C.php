<?php

require '../models/entites/Cats.php';
require '../models/catsManager.php';

// DB CONNECTION

require_once '../models/connectDb.php';

  $db = connectBdd();

// Creating catscManager instance

  $manager = new catsManager($db);


  if (isset($_POST['create']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['color']) && isset($_POST['sex']) &&
  !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['color']) && !empty($_POST['sex'])){



    $cat = new Cat($_POST);
    var_dump($cat);

    $manager -> add($cat);

  }

include '../vues/ex2.php';
