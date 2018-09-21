<?php

class Persona{

  private $nombre;
  private $edad;
  private $madre;
  private $padre;

  public function __construct($nombre,$edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function setPadre($padre){
    $this->padre = $padre;
  }

  public function setMadre($madre){
    $this->madre = $madre;
  }
}

$homero = new Persona("Homero", 40);
$marge = new Persona("Marge",39);

$bart = new Persona("Bartolomeo", 10);
$bart->setPadre($homero);
$bart->setMadre($marge);

var_dump($bart);


$carrito = new CarritoDeCompras();

$producto1 = new Producto("Cartera",1400);
$producto2 = new Producto("Auto",50000);


$carrito->agregarProducto($producto1);
$carrito->agregarProducto($producto2);

$usuarioLogueado = new Usuario("Diego");

$usuarioAmigo = new Usuario("Richard");

$usuarioLogueado->agregarAmigo($usuarioAmigo);
