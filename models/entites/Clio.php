<?php

class Clio {

// Attributes

protected $doors;
protected $color;

// Statics Attributes

protected static $price;

// Class Constants

const 3 = 'Tree Doors';
const 5 = 'Five Doors';
const COLORS = ['blanc' => 0001,
                'noir' => 0002,
                'bleu'=> 0003,
                'rouge' => 0004,
                'vert' => 0005,
                'gris'=> 0006,
                'jaune' => 0007,
                'viloet' => 0008 ]



// Constructor
public function __construct(array $donnees){

    $this->hydrate($donnees);

  }

  public function hydrate(array $donnees){

    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

// GETTERS

public function getDoors(){

  return $this->doors;

}

public function getColor(){

return $this->colors;

}

public function getPrice(){

return self::$price;

}

public function setDoors(int $nbDoors){

  if(in_array($nbDoors,[self::3,self::5])){

    $this->$doors = $nbDoors;

  }

  else {

    echo 'You only have the choice against TREE_DOORS or FIVE_DOORS';

  }
}

public function setColor(string $color){

foreach (self::COLORS as $key => $value) {
  if ($key == strtolower($color)){

    $this->$color = $key[value];

  }
}

}

public static function setPrice($reatilPrice){

  static::$price=$retailPprice;

}

// public function display(){
//
//   return  [$this->getDoors(), $this->getColors(), $this->getColor()];
//
// }



}
