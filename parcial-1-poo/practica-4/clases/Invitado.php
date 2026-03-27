<?php
require_once("Usuario.php");

class Invitado extends Usuario {
private $empresa;
#SE CREA EL METODO/FUNCION GETROL
    public function getRol(){
        return "Invitado";
    }
    public function setEmpresa( $empresa) {
     $this->empresa = $empresa;
}
    public function getEmpresa() {
    return $this->empresa;
}
}