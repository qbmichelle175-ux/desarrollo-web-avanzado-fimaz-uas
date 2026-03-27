<?php
require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];
try {
#SE CREA LA INSTANCIA PARA EL OBJETO ADMIN 
$admin1 = new Admin("Michelle ", "qbmichelle1@gmail.com");
$usuarios[] = $admin1;

#SE CREA LA INSTANCIA PARA EL OBJETO AlUMNO
$alumno1 = new Alumno("Michelle Quintero ", "qbmichelle17@gmail.com");
$alumno1->setMatricula("23170115");
$usuarios[] = $alumno1;

#SE CREA LA INSTANCIA PARA EL OBJETO INVITADO
$invitado1 = new Invitado("Michelle Quintero Bonilla", "qbmichelle175@gmail.com");
$invitado1->setEmpresa("Fimaz");
$usuarios[] = $invitado1;

#SE CREA LA INSTANCIA PARA EL OBJETO INVITADO INVALIDO
$invitado2 = new Invitado("Michelle Quintero Bonilla", "qbmichelle175.gmail.com");
$invitado2->setEmpresa("Fimaz");

} catch (Exception $e) {
 echo ("Error controlado: "). $e->getMessage(); 
}

#TABLA CON RESULTADOS
?>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>".$usuario->getNombre()."</td>";
            echo "<td>".$usuario->getCorreo()."</td>";
            echo "<td>".$usuario->getRol()."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
