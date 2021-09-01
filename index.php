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

  function __construct($_title, $_year){
    $this->title = $_title;
    $this->year = $_year;

    $this->setOld();
  }

  public function setOld(){
    if($this->year < 1990){
      $this->old = "Questo film risale a prima del 1990";
    }
  }

  public function getOld(){
    return $this->old;
  }
}

// Fight club
$fight_club = new Movie('Fight club',1999);
$fight_club->genre = "Drama";
$fight_club->length = 139;
$old = $fight_club->getOld();
var_dump($fight_club);

// Memento
$memento = new Movie('Memento',2000);
$memento->genre = "Mystery, Thriller";
$memento->length = 113;
$old = $memento->getOld();
var_dump($memento);

// Ritorno al futuro
$ritorno_al_futuro = new Movie('Ritorno al futuro', 1985);
$ritorno_al_futuro->genre = "Adventure, Comedy, Sci-Fi";
$ritorno_al_futuro->length = 116;
$old = $ritorno_al_futuro->getOld();
var_dump($ritorno_al_futuro);

// $class_methods = get_class_methods('Movie');
// var_dump($class_methods);
