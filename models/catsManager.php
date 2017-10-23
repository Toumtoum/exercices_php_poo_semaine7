<?php
class catsManager{

  private $_db;

  public function __construct($db){

    $this->setDb($db);

  }

  public function add(Cat $cat){

    $req = $this->_db -> prepare('INSERT INTO cats (name,color,sex,age) VALUES (:name,:color,:sex,:age)');
    $req -> execute(['name' => $cat -> getName(),
                    'color' => $cat -> getColor(),
                    'sex' => $cat -> getSex(),
                    'age' => $cat -> getAge()
                  ]);

  }

  public function getAll()
  {

    $req = $this->_db->query('SELECT * FROM cats');
    $donnees = $req->fetchAll();
    foreach ($donnees as $key => $value){
      $array[] = new Cat($value);
    }
    return $array;
  }

  public function setDb(PDO $db)
  {
  $this->_db = $db;
  }


}
