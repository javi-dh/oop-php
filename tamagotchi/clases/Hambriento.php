<?php

class Hambriento extends Estado {

    public function recibirComida() {
      $nuevoEstado = new Feliz();

      return $nuevoEstado;
    }

}
