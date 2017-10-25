<?php

require './models/entites/form.php';

include './vues/ex3.php';

$form = new Form2('','post','test');
$form->setTexte('test','test');
$form->setTexte('test','test');
$form->setRadioBtn('test',1);
$form->setRadioBtn('test',2);
$form->setCheckBox('test','test');
$form->setSubmit('test');
echo $form->form();
