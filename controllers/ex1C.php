<?php

require './models/entites/clio.php';

$objectsClio = [ 1 => new Clio(['doors'=>3,'color'=>'bleu','price'=>12000]),
                2 => new Clio(['doors'=>5,'color'=>'bleu',12000]),
                3 => new Clio(['doors'=>3,'color'=>'gris',12000]),
                4 => new Clio(['doors'=>5,'color'=>'jaune',12000]),
                5 => new Clio(['doors'=>3,'color'=>'vert',12000]),
                6 => new Clio(['doors'=>5,'color'=>'noir',12000])
              ];


include './vues/ex1.php';
