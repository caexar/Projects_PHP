<?php
include("NodoEditorial.php");
include("NodoLibro.php");

class MultilistaBiblioteca{
  private $PTR;
  private $FINAL;

  public function __construct(){
    $this->PTR = null;
    $this->FINAL = null;
  }

  public function AgregarEditorial($P){
      if ($this->PTR == null){
                $this->PTR = $P;
            }else{
                $this->FINAL->setSig($P);
                $P->setAnt($this->FINAL);
            }
            $this->FINAL = $P;
       }

    public function BuscarEditorial($C){
            $P = $this->PTR;
            $Encontrado = False;
            while ($P != null && !$Encontrado){
                if ($P->getId() == $C){
                    $Encontrado = true;
                }else{
                    $P = $P->getSig();
                }
            }
            return $P;
        }

}

?>