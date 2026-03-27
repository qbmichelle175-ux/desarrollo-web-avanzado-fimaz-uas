<?php
require_once("Usuario.php");

class Alumno extends Usuario {
private $matricula;
#SE CREA EL METODO/FUNCION GETROL
    public function getRol(){
        return "Alumno";
    }
      public function setMatricula( $matricula) {
     $this->matricula = $matricula;
}
    public function getMatricula() {
    return $this->matricula;
}
}