# Relación 00 de PHP

Relación de ejercicios resueltos del tema 3 del libro Implantación de aplicaciones web de la editorial Garceta. El material necesario lo podéis en el repositorio github del tema, además de las soluciones: [3-php-basico](https://github.com/jorgesancheznet/libro-iaw/tree/master/3-php-basico)

Para muchas prácticas se necestia utilizar la función ```mt_rand```, la cual recibe dos números y retorna, como resultado, un número aleatorio entre el primero y el segunda. Por ejemplo, ```mt_rand(10,20)``` devuelve un número aleatorio entre 10 y 20 (ambos incluidos).

## **Práctica 3.1:** Imagen aleatoria

Crea una página PHP que muestre de forma aleatoria dos imágenes. Es decir, se muestra  una u otra de forma aleatoria.

## **Práctica 3.2:** Cálculo de salario

Lee el nombre, los apellidos, el salario (número con decimales) y la edad de una persona (un número entero) en un formulario.
Recoge los datos y con ellso calcula un nuevo salario para esa persona en base a esta situación:
  - Si el salario es mayor de 2000 € no cambiará
  - Si el salario está entre 1000 y 2000 €:
    - Si además la edad es mayor de 45 años, se sube un 3%
    - Si la edad es menor de 45 o igual se sube un 10%
  - Si el salario es menor de 1000 €:
    - Los menores de 30 años cobrarán, a partir de ahora, exactamente 1100 €
    - De 30 a 45 años, sube un 3%
    - A los mayores de 45 años, sube un 15%

## **Práctica 3.3:** Saber si hay número

Crea un formulario que lea un número, después un mensaje nos indicará si era realmente o no un número y, si es un número, si tenía decimales.

## **Práctica 3.4:** Fondo aleatorio

- Crea una página PHP que ponga de fondo un color aleatorio.

- Para ello recuerda que en CSS el color de fondo se puede realizar mediante la función **rgb** a la que se le pasan tres números del 0 al 255, el primero es el nivel de rojo, el segundo el de verde y el tercero el del azul.

## **Práctica 3.5:** Asteriscos

Crea un formulario en el que se pida un número entero positivo. Después, haz que la página escriba tantos asteriscos (en la misma página) como el número que se haya escrito. Si se escribe 5, se mostrarán 5 asteriscos.

## **Práctica 3.6:** Creación de tabla

- Crea un formulario que pida dos números. Ambos tienen que valer 1 o más, de no ser así se indica el error.

- El resultado será una tabla (se mostrará en la misma página del formulario) con el tamaño indicado.

## **Práctica 3.7:** Tabla del 1 al 1000

Crea una página PHP que muestre los números del 1 al 1000 en una tabla con una anchura de 5 columnas.

## **Práctica 3.8:** Suma números pares

- Crea un formulario que pida al usuario un número.

- Después, en otra página, recoge ese número y muestra la suma de todos los números pares anteriores a él.

- Por ejemplo, si el usuario escribe el número 9 saldría por pantalla el número 20, resultado de sumar 2 + 4 + 6 + 8.

- Mejorar el resulto para que la página que muestra la suma, después muestre un enlace con el que regresar al formuarlio de modo que, al hacer clic en él, el cuadro de entrada del número muestre el último número introducido.

## **Práctica 3.9:** ASCII

- Crear una página PHP que muestre por pantalla todo el código ASCII en una tabla de 16 columnas.

- Como pista, la función ```chr```, recibe un número y muestra el código ASCII equivalente. Así ```chr(65)``` muestra el carácte *A*.

## **Práctica 3.10:** Unicode

- Mejora la práctica anterior para mostrar los caracteres dela tabla Unicode del 0 al 50000.

- En este caso es mejor usar esta idea: en HTML si escribrimos ***&#*** seguido de un número y del símbolo de punto y coma (;), nos muestra el carácter Unicode correspondiente a ese número. Así el código ***&\#241;*** en una página web, muestra el carácter ***ñ***.

## **Práctica 3.11:** Enlaces Unicode

Como última mejora (muy avanzada), haz que la tabla anteriro se pueda mostrar paginada. De modo que en cada pantall se muestren 500 códigos y unos enlaces permitan pasar a la siguiente página.

## **Práctica 3.12:** Cuadradados

Crea una página que muestre 2000 cuadrados de colores aleatorios que se coloquen también de forma aleatoria en la pantalla. Cada cuadrado deberá medir 50x50 píxeles.
