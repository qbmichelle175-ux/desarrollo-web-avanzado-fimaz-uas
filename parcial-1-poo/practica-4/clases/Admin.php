<?php
require_once "Usuario.php";

#CREACION CLASE ADMIN QUE HEREDA DE LA CLASE USUARIO
class Admin extends Usuario {
#SE CREA EL METODO/FUNCION GETROL
    public function getRol(){
        return "Administrador";
    }

}