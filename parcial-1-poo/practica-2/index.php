<?php
include "Admin.php";

#SE CREA LA INSTANCIA PARA EL OBJETO ADMIN 
$admin1 = new Admin("Michelle Quintero", "qbmichelle175@gmail.com");

#MOSTRAR VALORES
echo $admin1->getNombre() . "<br>"; #UN SALTO DE LINEA PARA QUE NO SE MUESTRE TODO PEGADO
echo $admin1->getCorreo(). "<br>";
echo $admin1->getRol();