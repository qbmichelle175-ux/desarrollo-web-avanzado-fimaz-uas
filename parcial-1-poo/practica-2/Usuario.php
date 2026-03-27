<?php
class Usuario {
#VARIABLES
    private $nombre;
    private $correo;  
#CONSTRUTOR
    public function __construct ($nombre, $correo) {
    $this->nombre = $nombre;
    $this->correo = $correo;
    }
#SET ASIGNARLE VALOR A LAS VARIABLES
    public function setNombre ($nombre) {
    $this->nombre = $nombre;
    }
    
    public function setCorreo ($correo) {
    $this->correo = $correo;
    }

#GET OBTENER INFORMACION DE LAS VARIABLES
    public function getNombre() {
    return $this->nombre; 
    }
    public function getCorreo() {
    return $this->correo;
    }

}