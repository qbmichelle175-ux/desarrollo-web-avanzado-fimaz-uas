<?php
require_once("Usuario.php");


class Alumno extends Usuario {

private $matricula; #ATRIBUTO O VARIABLE

#SE CREA EL METODO/FUNCION GETROL
    public function getRol(){
        return "Alumno";
    }

    public function getMatricula() {
    return $this->matricula;
    }
    public function setMatricula($matricula){
    $this->matricula = $matricula;
    }
}