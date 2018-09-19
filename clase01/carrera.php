<?php

class Auto{

	private $marca;
	private $velocidad = 0;

	public function __construct($marca){
		$this->marca = $marca;
	}

	public function acelerar(){
		$this->velocidad = $this->velocidad + rand(1,100);
	}

	public function getVelocidad(){
		return $this->velocidad;
	}
}

$ford = new Auto('Ford');
$fiat = new Auto('Fiat');

while($ford->getVelocidad() < 100 && $fiat->getVelocidad() < 100){
	$fiat->acelerar();
	$ford->acelerar();
	echo 'Fiat acelero a '.$fiat->getVelocidad();
	echo '<br>';
	echo 'Ford acelero a '.$ford->getVelocidad();
	echo '<br>';
	echo '<br>';
}

if($ford->getVelocidad() > $fiat->getVelocidad()){
	echo '<h1>Gano ford</h1>';
}else{
	echo '<h1>Gano fiat</h1>';
}
