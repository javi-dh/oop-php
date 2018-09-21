<?php

class Sediento extends Estado {

    public function recibirComida() {

      return $this;
    }

    public function recibirBebida() {
      return new Feliz();

    }

}
