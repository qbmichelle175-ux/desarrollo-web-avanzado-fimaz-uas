<?php
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {
#SE CREA LA INSTANCIA PARA EL OBJETO ADMIN 
$admin1 = new Admin("Michelle Quintero", "qbmichelle175@gmail.com");
#MOSTRAR VALORES
echo $admin1->getNombre() . "<br>"; #UN SALTO DE LINEA PARA QUE NO SE MUESTRE TODO PEGADO
echo $admin1->getCorreo(). "<br>";
echo $admin1->getRol(). "<br>". "<br>";

} catch (Exception $e) {
 echo $e->getMessage(); 
}

try {
#SE CREA LA INSTANCIA PARA EL OBJETO AlUMNO
$alumno1 = new Alumno("Michelle Quintero Bonilla", "qbmichelle175@gmail.com");
$alumno1->setMatricula("23170115");
#MOSTRAR VALORES
echo $alumno1->getNombre() . "<br>"; #UN SALTO DE LINEA PARA QUE NO SE MUESTRE TODO PEGADO
echo $alumno1->getCorreo(). "<br>";
echo $alumno1->getMatricula(). "<br>";
echo $alumno1->getRol();

} catch (Exception $e) {
 echo $e->getMessage();
}
