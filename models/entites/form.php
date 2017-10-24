<?php
class Form{

protected $form;


public function __construct($action,$method,$fieldset){
      // ajouter dans $_form le code html debut de formulaire
      $this->form .= '<fieldset ><legend>' . $fieldset . '</legend><form action="'. $action . '" method="' .$method. '" >'. "\n";
  }

public function setTexte($label,$name)
  {
    $this->form .= '<br/><label> ' .$label . '</label><input type="text" name="' .$name . '">'. "\n";
  }

public function setSubmit($value)
  {
    $this->form .= '<br/><input type="submit" value="' .$value . '"></form></fieldset>';
  }
// getters

public function form(){
    return $this->form;
  }
}

class Form2 extends Form{

  public function setRadioBtn($name,$label){

    $this->form .='<br/><label><input type="radio" name="' . $name . '">' . $label . '</label>';

  }

  public function setCheckBox($name,$label){

    $this->form .='<br/><label><input type="checkbox" name="' . $name . '">' . $label . '</label>';

  }

}
