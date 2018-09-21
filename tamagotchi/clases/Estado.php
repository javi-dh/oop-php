<?php


abstract class Estado {


  public abstract function recibirComida();

  public function recibirBebida() {
    return $this;
  }
  
  public function recibirMimos() {
    return $this;
  }

}
