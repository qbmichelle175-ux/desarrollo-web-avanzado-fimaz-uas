PRÁCTICA DE LABORATORIO 3: SISTEMA DE USUARIOS CON VALIDACIONES Y EXCEPCIONES

• Descripción del sistema
Cree un sistema donde existen dos tipos de roles Administrador y Alumno, ambos cuentan con nombre y correo, pero, el Alumno tiene como extra la matricula

• Explicación del flujo de clases
En la clase Usuario, estan las variables nombre y correo donde en correo se hace una validacion de que el correo este bien estructurado(bien escrito) y si no lo esta se manda un mensaje diciendo que no es valido.
En la clase Admin esta hereda lo de Usuario y aparte tiene metodo getRol que es el de Administrador.
En la clase Alumno de igual manera hereda de Usuario, pero aparte se agrega una variable matricula y un metodo getRol que es el de Alumno.

• Evidencia del manejo de errores
Se usa un try/catch , si el correo esta mal escrito te regresa un mensaje diciendo que el correo no es valido.

