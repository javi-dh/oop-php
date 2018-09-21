<?php

include_once 'autoload.php';

$triste = new Triste();

$mascota = new Tamagotchi();
echo 'Antes de comer<br> ';
var_dump($mascota);

$mascota->comer();


echo 'Despues de comer<br> ';
var_dump($mascota);
