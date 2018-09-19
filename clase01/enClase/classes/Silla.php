<?php

	class Silla
	{
		const MATERIAL = 'plástico';
		private $color;
		private $cantPatas;
		private $respaldo;
		private $altura;
		private $pesoQueSoporta;

		public function __construct($unColor, $cantDePatasDeseada)
		{
			$this->color = $unColor;
			$this->cantPatas = $cantDePatasDeseada;
		}

		public function setColor($color)
		{
			$this->color = $color;
		}

		public function getColor()
		{
			return $this->color;
		}

		public function setRespaldo($tieneRespaldo)
		{
			$this->respaldo = $tieneRespaldo;
		}
	}
