<?php

class Auto{

  public $eigenaar;
  public $model;
  public $datumverkoop;
}

$auto1 = new Auto();
$auto1->eigenaar = 'Jhonny';
$auto1->model = "Audi";
$auto1->datumverkoop = 2002;


class Klant{

public $auto;
public $adres;
public $email;
}

$klant1 = new Klant();
$klant1->auto = 'Audi';
$klant1->adres = 'Ridderkerk';
$klant1->email = 'jack.nicholson@gmail.com';


var_dump($auto1);
var_dump($klant1);

 ?>
