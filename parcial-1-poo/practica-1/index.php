<?php
include "Usuario.php";

#INSTANCIA CREO EL OBJETO USUARIO1 PARA ACCEDER A LAS VARIABLES DE LA CLASE
$usuario1 = new Usuario("Michelle Quintero", "qbmichelle175@gmail.com");

#MOSTRAR VALORES
echo $usuario1->getNombre() . "<br>"; #UN SALTO DE LINEA PARA QUE NO SE MUESTRE TODO PEGADO
echo $usuario1->getCorreo();