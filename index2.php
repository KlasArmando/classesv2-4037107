<?php

class Product{

  public $name;
  public $prijs;
}


$product1 = new Product();
$product1->name = 'Telefoon';
$product1->prijs = '380,- euro';


class Klant{

public $naam;
public $leeftijd;
public $klantnummer;
}

$klant1 = new Klant();
$klant1->naam = 'Scorpion';
$klant1->leeftijd = 'Unknown';
$klant1->$klantnummer = 222;


echo ($product1);
echo ($klant1);

 ?>
