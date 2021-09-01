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

  function __constructor($_title){
    $this->title = $_title;
  }

  public function setOld(){
    if($this->year < 1980){
      $this->old = 'Questo film risale a prima del 1980';
    }
  }
}

$fight_club = new Movie();
$memento = new Movie();
$ritorno_al_futuro = new Movie();

