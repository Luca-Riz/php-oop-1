<!-- 
-è definita una classe ‘Movie’ 
  => all'interno della classe sono dichiarate delle variabili d'istanza (o oggetti)
  => all'interno della classe è definito un costruttore 
  => all'interno della classe è definito almeno un metodo

-vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

//! classe Movie
class Movie {

  //! variabili d'istanza o oggetti
  public $title;
  public $genre;
  public $year;
  public $length = 0;
  public $old = 'Questo film é recente';
  public $long = '';

  //! costruttore
  function __construct($_title, $_year){
    $this->title = $_title;
    $this->year = $_year;

    $this->setOld();
  }

  //! metodo
  public function setOld(){
    if($this->year < 1990){
      $this->old = "Questo film risale a prima del 1990";
    }
  }

  //! metodo
  public function setLong(){
    if($this->length > 120){
      $this->long = 'Questo film dura piú di 2 ore';
    } else {
      $this->long = 'Durata inferiore alle 2 ore';
    }
  }

  //! metodo
  public function getOld(){
    return $this->old;
  }

  //! metodo
  public function getLong(){
    return $this->long;
  }
}

// Fight club
$fight_club = new Movie('Fight club',1999); //?qui passo titolo e anno e quindi posso lanciare il metodo direttamente nel costruttore
$fight_club->genre = "Drama";
$fight_club->length = 139;
$old = $fight_club->getOld();
$fight_club->setLong(); //? per 'long' devo lanciare il metodo da qui, altrimenti non viene letto il parametro, vede quello di default, in questo caso ''
$long = $fight_club->getLong();
var_dump($fight_club);

// Memento
$memento = new Movie('Memento',2000);
$memento->genre = "Mystery, Thriller";
$memento->length = 113;
$old = $memento->getOld();
$memento->setLong();
$long = $memento->getLong();
var_dump($memento);

// Ritorno al futuro
$ritorno_al_futuro = new Movie('Ritorno al futuro', 1985);
$ritorno_al_futuro->genre = "Adventure, Comedy, Sci-Fi";
$ritorno_al_futuro->length = 116;
$old = $ritorno_al_futuro->getOld();
$ritorno_al_futuro->setLong();
$long = $ritorno_al_futuro->getLong();
var_dump($ritorno_al_futuro);

// $class_methods = get_class_methods('Movie');
// var_dump($class_methods);
