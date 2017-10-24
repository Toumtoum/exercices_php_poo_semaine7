<?php

Class Cat{

  // Attributes

  protected $name;
  protected $color;
  protected $age;
  protected $sex;

  // Class's Constants

  const sex = ['male','female'];

  const color = ['white','black','grey','marroon','black and white'];

  const MIN_AGE = 0;
  const MAX_AGE = 30;

  const error = 'error';

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

  public function getName(){

    return $this->name;

  }

  public function getColor(){

    return $this->color;

  }

  public function getAge(){

    return $this->age;

  }

  public function getSex(){

    return $this->sex;

  }

  public function checkData(){

    $array = [$this->getName(),
                $this->getAge(),
                $this->getColor(),
                $this->getSex()];

    return $array;

  }

  // SETTERS

  public function setName(string $name){

    if (strlen($name) <= 15){
    $this->name = $name;
    }

    else {
      $this->name=self::error;
    }
  }

  public function setColor(string $color){

    $colorGiven = strtolower($color);

    foreach (self::color as $value) {
      if ($value == $colorGiven){
        $this->color = $colorGiven;
      }
    }


  }

  public function setAge(int $age){

    if (in_array($age, range(SELF::MIN_AGE,SELF::MAX_AGE))){

      $this->age=$age;

    }

    else {
      $this->age=self::error;
    }

  }

  public function setSex(string $sex){

    if (in_array($sex, self::sex)){

      $this->sex = $sex;

    }

  }

}
