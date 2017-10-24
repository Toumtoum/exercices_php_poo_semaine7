<?

class Clients extends Person{

  protected $adress;

// GETTERS

  public function getAdress(){

    return $this->adress;

  }

// SETTERS

  public function setAdress($adress){

    $this->adress = $adress;

  }

  public function getInfos(){

    $array = ['adress' => $this->adress,'name' => $this->name, 'surname' => $this->surname];

    return $array;

  }


}
