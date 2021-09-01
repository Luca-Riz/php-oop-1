<!-- 
-è definita una classe ‘Movie’ 
  => all'interno della classe sono dichiarate delle variabili d'istanza (o oggetti)
  => all'interno della classe è definito un costruttore 
  => all'interno della classe è definito almeno un metodo

-vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

class Movie {
  public $title;
  public $genre;
  public $year;
  public $length = 0;
  public $old = 'Questo film é recente';

  function __construct($_title){
    $this->title = $_title;
  }

  public function setOld(){
    if($this->year < 1980){
      $this->old = "Questo film risale a prima del 1980";
    }
  }

  public function getOld(){
    return $this->old;
  }
}

$fight_club = new Movie('Fight club');
$fight_club->genre = "Drama";
$fight_club->year = 1960;
$fight_club->length = 139;
var_dump($fight_club);

$class_methods = get_class_methods('Movie');
var_dump($class_methods);

// $memento = new Movie();
// $ritorno_al_futuro = new Movie();

