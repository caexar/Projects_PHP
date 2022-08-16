<?php

class NodoEditorial{

  private $Denominacion;
  private $Id;
  private $Sig;
  private $Ant;
  private $Abajo;

  public function __construct($d, $i){
    $this->Denominacion = $d;
    $this->Id = $i;
    $this->Sig =null;
    $this->Ant =null;
    $this->Abajo =null;
  }

  public function getDenominacion(){
    return $this->Denominacion;
  }

  public function setDenominacion($d){
    $this->Denominacion = $d;
  }

    public function getId(){
    return $this->Id;
  }

  public function setId($i){
    $this->Id = $i;
  }

   public function getAnt(){
    return $this->Ant;
  }

   public function getSig(){
    return $this->Sig;
  }

   public function getAbajo(){
    return $this->Abajo;
  }

  public function setSig($s){
    $this->Sig = $s;
  }
  public function setAnt($a){
    $this->Ant= $a;
  }
  public function setAbajo($a){
    $this->Abajo = $a;
  }


}

?>