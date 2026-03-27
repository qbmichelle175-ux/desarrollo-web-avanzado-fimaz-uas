<?php
class Usuario {
#VARIABLES
    private $nombre;
    private $correo;  
#CONSTRUTOR
    public function __construct ($nombre, $correo) {
    $this->nombre = $nombre;
    $this->setCorreo($correo);
    }
#SET ASIGNARLE VALOR A LAS VARIABLES
    public function setNombre ($nombre) {
    $this->nombre = $nombre;
    }
    
    public function setCorreo ($correo) {
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { #SE VALIDA QUE EL FORMATO SEA CORRECTO
            throw new Exception("El correo no es valido"); #SE LANZA LA EXCEPCION
        } 

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

