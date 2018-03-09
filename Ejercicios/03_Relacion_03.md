# Relación 03 de PHP

Relación de ejercicios del tema 5 del libro Implantación de aplicaciones web de la editorial Garceta. El material necesario lo podéis en el repositorio github del tema, además de las soluciones: [5-php-intercambio](https://github.com/jorgesancheznet/libro-iaw/tree/master/5-php-intercambio).

## Práctica 5.1: Grabando preferencias de usuario con cookies

- Crea una página web (***practica1-index.php***) en la que se pregunten datos del usuario, concretamente:
    - Nombre y apellidos
    - Color deseado para el fondo
    - Color deseado para la letra
    - Elegir una de entre tres tipos de letra (puede ser, por ejemplo, tres tipos accesibles en la págian de [Google fonts](https://fonts.google.com/))
- Tras aceptar los datos, una segunda página (***practica1-saludo.php***) saluda al usuario, por ejemplo, con el mensaje ***Hola Ana Fernández***, utilizando el tipo de letra y colores elegidos.
- La siguiente vez que accedamos a la págian inicial (***practica1-index.php***), ya no nos preguntará las preferencias porque se dará cuenta que tiene los datos en cookies y nos llevará a la segunda página.
- Si intentamos acceder directamente a la págian del saludo y no hemos grabado las preferencias, esta página nos llevará a la página con el formulario.
- En la página del saludo, un enlace nos permitirá borrar las preferencias.

## Práctica 5.2: Grabando preferencias mediante sesiones

- Se trata de hacer la misma página que en la práctica anterior, pero ahora utilizando sesiones.

## Práctica 5.3: Zona restringida

- Crea una página PHP llamada ***practica3-restringida.php***, bastará con que simplemente muestre el mensaje ***Zona restringida***.
- Dicha págian no se podrá ver por parte de ningún usuario que no se haya autenticado en la página ***practica3-autentificacion.php***, la cual pedirá una contraseña.
- Cuando entramos en la página ***practica3-autentificacion.php*** y escribimos la contraseña correcta, se nos enviará automáticamente a la página ***practica3-restringida.php***.
- Si intentamos acceder directamente a la zona restringida sin haber pasado nunca por la autenticación, no se nos permitirá entrar y se nos enviará a ***practica3-autentificacion.php*** para que escribamos la contraseña.
- Tras habernos autentificado, durante la sesión podremos acceder directamente a la zona restringida y no se nos pedirá la contraseña.
- **Nota:** se pueden utilizar cookies o sesiones, pero la contraseña se deberá almacenar cifrada para una mayor seguridad, especialmente si se utilizan cookies.

## Práctica 5.4: Lista de tareas

- Muestra una página web en la que dispongamos inicialmente de un formulario en el que tenemos un cuadro de texto y un botón con el texto **Añadir tarea**.
- Ese formulario nos permitirá escribir el nombre de una tarea y al pulsar añadir, aparecerá la página mostrando una lista de tareas donde ya aparece la que hemos añadido.
- Podemos seguir añadiendo tareas y cada vez que lo hacemos, la lista va creciendo.
- Al lado de la listga de tareas añadidas, cada una de ellas tendrá un enlace que diga **Quitar tarea**, dicho enlace nos permitirá quitar la tarea de la lista.
- En todo momento el usuario tien que ver la misma página en la que la lista muestra las tareas que ha ido añadiendo y donde ya no aparecerán las que ha ido eliminando.
