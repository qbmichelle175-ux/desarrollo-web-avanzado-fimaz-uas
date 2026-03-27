PRÁCTICA DE LABORATORIO 4: INTEGRACIÓN POO + HERENCI + VALIDACIONES + EXCEPCIONES (PHP 8+)

• Objetivo de la práctica
-Tener una carpeta con 4 clases, cada clase en su respectivo archivo.
  -Usuario: tiene sus dos variables nombre y correo donde en correo se hace una validacion de que el correo este bien estructurado(bien escrito) y si no lo esta se manda un mensaje diciendo que no es valido.
  -Admin: esta hereda de Usuario y aparte tiene metodo getRol que es el de Administrador.
  -Alumno: de igual manera hereda de Usuario, pero aparte se agrega una variable matricula y un metodo getRol que es el de Alumno.
  -Invitado: de igual manera hereda de Usuario, pero aparte se agrega una variable empresa y un metodo getRol que es el de Invitado.
-Un archivo index que muestre un usurio que tenga su coreo invalido para que con el try/catch muestre una excepcion, mas aparte una tabla con los usuario que si fueron correctos (un usario por cada rol).

• Requisitos (PHP 8, XAMPP)
Utilice el Visual Studio Code para el codigo, con el xampp lo corro por el apache y con el navegador entro a revisar que funcione correctamente y poder ver que me arroja.

• Ruta de ejecución en navegador
http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-4/index.php

• Evidencia esperada (tabla + error controlado)
Mostrar que cuando un usuario ingresa el correo mal se arroje un mensaje diciendo que el correo es invalido yen la tabla se muestran los usuarios que fueron correctos.