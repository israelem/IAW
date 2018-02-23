# Relación 03 de PHP

Relación de ejercicios del tema 6 del libro Implantación de aplicaciones web de la editorial Garceta. El material necesario lo podéis en el repositorio github del tema, además de las soluciones: [5-php-intercambio](https://github.com/jorgesancheznet/libro-iaw/tree/master/6-php-bd).

## Práctica 6.1: Búsqueda de datos de localidades

- Para realizar esta práctica debemos descargar y ejecutar (con permiso de root en MySQL) los archivos de esta prácticas presentes en la dirección [BD Geografía](https://github.com/jorgesancheznet/libro-iaw/tree/master/6-php-bd/geografia).

- Una vez hayamos ejecutado esas instrucciones, nuestra instalación de MySQL tendrá una nueva base de datos llamada ***geografía*** que contiene datos de la mayoría de localidades de España.

- La estrucutra relacional de esas tablas es la siguiente:
![bd_geografia](imagenes/bd_geografia.png)

- La práctica consiste en encontrar una localidad eligiendo primero la comunidad en la que está, luego una provincia de esa localidad y finalmente elegir la localidad de una lista de las localidades de esa provincia.

- Para ello un primer formulario nos muesra la lista de comunidades.

- Tras elegir la comunidad, un segundo formulario nos muestra las provincias de esa comunidad.

- Tras elegir la comunidad, un segundo formulario nos muestra las provincias de esa comunidad.

- Finalmente un tercer formulario nos muestra una lista con las localidades de la provincia elegida.

- Cuando elijamos la localidad deseada, se nos enseña la población que tiene esa localidad. Eso se hará debajo de la lista de localidades, la misma página nos muestra ese resultado.

- Si acudimos a la provincia sin haber pasado vía GET una comunidad, se nos devolverá al formulario de las comunidades. Si vamos a las localidades sin haber pasado una provincia, se nos enviará al formulario de provincias.

## Práctica 6.2: Paginación de resultados

- Utiliza los datos de la base de datos geografía. Para obtenerlos e instalarlos véase el enunciado e inicio de la solución de la **Práctica 6.1**.

- Muestra una primera página que pida mediante un cuadro de texto el nombre de una provincia española.

- Al enviar ese dato se busca la provincia. De no existir se indica que no existe. Hay que tener en cuenta que, al buscar, no tendremos en cuenta si la provincia se ha escrito en minúscula o en mayúscula.

- Si la provincia si existe, se mostrarán los datos de todas sus localidades en orden alfabético y de forma paginada. Se mostrarán 25 localidades por página. Una serie de botones nos permitirán pasar a la página siguiente, a la anterior o a un número de página concreto.

