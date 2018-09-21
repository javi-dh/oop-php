<?php

class Tamagotchi {

  private $estado;


  public function __construct() {
    $this->estado = new Hambriento();
  }

  public function comer() {

    $this->estado =  $this->estado->recibirComida();

  }

  public function beber() {
    $this->estado =  $this->estado->recibirBebida();
  }

  public function mimar() {
    $this->estado =  $this->estado->recibirMimos();
  }
}
