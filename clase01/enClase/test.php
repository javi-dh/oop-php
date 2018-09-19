<?php
	spl_autoload_register(function ($nombreClase) {
		require_once "classes/" . $nombreClase . ".php";
		echo "<p style='color: red;'>classes/" . $nombreClase . ".php</p>";
	});

	// Instancia de una silla

	$sillaMarron = new Silla(33, 56);
	$sillaCeleste = new Silla('Celeste', 4);

	echo "<pre>";
	$sillaMarron->setColor('Marrón');
	$sillaMarron->setRespaldo(false);
	var_dump($sillaMarron);
	echo "</pre>";

	echo "<hr>";

	echo "<pre>";
	$sillaCeleste->setRespaldo(true);
	var_dump($sillaCeleste);
	echo "</pre>";

	echo "De qué color es la silla Marrón: " . $sillaMarron->getColor();

	echo "<hr>";

	echo "De qué color es la silla Celeste: " . $sillaCeleste->getColor() . " y es de " . Silla::MATERIAL;

	echo "<hr>";

	echo "La dirección de DH Belgrano es: " . Sedes::BELGRANO . "<br>";
	echo "La dirección de DH Lima es: " . Sedes::LIMA . "<br>";

	echo "<hr>";

	$juanita = new Usuario('Juana', 'Heinz');

	echo "<pre>";
	var_dump($juanita);
	echo "</pre>";

?>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
