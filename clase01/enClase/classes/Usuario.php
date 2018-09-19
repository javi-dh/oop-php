<?php

	class Usuario
	{
		protected $nombre;
		protected $apellido;
		private $cursada;

		public function __construct($nombre, $apellido)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function getApellido()
		{
			return $this->apellido;
		}
	}
