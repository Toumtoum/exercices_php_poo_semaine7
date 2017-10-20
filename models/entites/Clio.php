<?php

class Clio {

// Attributes

protected $doors;
protected $color;

// Statics Attributes

protected static $price = 10000;

// Class Constants

const TREE_DOORS = 3;
const FIVE_DOORS = 5;
const COLORS = ['blanc' => 1000,
                'noir' => 2000,
                'bleu'=> 3000,
                'rouge' => 4000,
                'vert' => 5000,
                'gris'=> 6000,
                'jaune' => 7000,
                'violet' => 8000 ];



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

return $this->color;

}

public function getPrice(){

return self::$price;

}

// SETTERS

public function setDoors(int $nbDoors){

  if(in_array($nbDoors,[self::TREE_DOORS,self::FIVE_DOORS])){

    $this->doors = $nbDoors;

  }
}

public function setColor(string $color){

foreach (self::COLORS as $key => $value) {
  if ($key == strtolower($color)){

    $this->color = $value;

  }
}

}

public function setPrice($retailPrice){

  static::$price=$retailPrice;

}

// public function display(){
//
//   return  [$this->getDoors(), $this->getColors(), $this->getColor()];
//
// }



}
