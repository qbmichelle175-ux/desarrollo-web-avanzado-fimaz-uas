<?php
require_once "Admin.php";
require_once "Alumno.php";

try {
#SE CREA LA INSTANCIA PARA EL OBJETO ADMIN 
$admin1 = new Admin("Michelle ", "qbmichelle175@gmail.com");

#SE CREA LA INSTANCIA PARA EL OBJETO AlUMNO
$alumno1 = new Alumno("Michelle Quintero Bonilla", "qbmichelle175@gmail.com");
$alumno1->setMatricula("23170115");

#SE CREA LA INSTANCIA PARA EL USUARIO INVALIDO
$alumno2 = new Alumno ("Michelle Quintero Bonilla", "qbmichelle175.gmail.com");
$alumno2->setMatricula("23170115");

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
            <th>Matricula</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo "<tr>";
            echo "<td>".$admin1->getNombre()."</td>";
            echo "<td>".$admin1->getCorreo()."</td>";
            echo "<td>".$admin1->getRol()."</td>";
            echo "<td></td>"; #ESPACIO VACIO DE QUE ADMIN NO TIENE MATRICULA
            echo "</tr>"; #TERMINA ESA FILA 

            echo "<tr>";
            echo "<td>".$alumno1->getNombre()."</td>";
            echo "<td>".$alumno1->getCorreo()."</td>";
            echo "<td>".$alumno1->getRol()."</td>";
            echo "<td>".$alumno1->getMatricula()."</td>";
            echo "</tr>";
        
        ?>
    </tbody>
</table>
