<?php

abstract class Person{

  protected $name;
  protected $surname;

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

  //GETTERS

  public function getName(){

    return $this->name;

  }

  public function getSurname(){

    return $this->surname;

  }

  // SETTERS

  public function setname($name){

    $this->name = $name;

  }

  public function setSurname($surname){

    $this->surname = $surname;

  }

}
