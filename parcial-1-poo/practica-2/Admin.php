<?php
INCLUDE "Usuario.php";

#CREACION CLASE ADMIN QUE HEREDA LAS VARIABLES DE LA CLASE USUARIO
class Admin extends Usuario {
#SE CREA EL METODO/FUNCION GETROL
    public function getRol(){
        return "Administrador";
    }

}