<?php


class Feliz extends Estado {

  public function recibirComida() {

    return $this;
  }

  public function recibirBebida() {
    echo 'Beep x5';

    return parent::recibirBebida();
  }
}
