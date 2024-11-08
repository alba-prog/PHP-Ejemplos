<?php 
 //Expresiones aritméticas
 //No es necesario inicializar variables en PHP, sin embargo, es muy buena práctica. Las variables no inicializadas tienen un valor predeterminado de acuerdo a su tipo dependiente del contexto en el que son usadas. Las booleanas se asumen como false, los enteros y flotantes como 0, las cena (p.ej usada en echo), se establecen como una cadena vacia y los arrays se establecen como un array vacio.

 $a = 20;
 $b = 3;
 $resultado = 0;

 //Suma

 $resultado = $a + $b;
 echo "$a + $b es igual a $resultado";
 echo "<br>";
 echo '$a + $b es igual a $resultado'; //comillas simples lo interpreta como texto
 echo "<br>";

//Resta
$resultado = $a - $b;
 echo "$a - $b es igual a $resultado";
 echo "<br>";

 //Producto
 $resultado = $a * $b;
 echo "$a x $b es igual a $resultado";
 echo "<br>";

 //División
 $resultado = $a / $b;
 echo "$a entre $b es igual a $resultado"."<br>";

 //División entera
 $resultado = (int)($a / $b);
 echo "(int) ($a / entre $b) es igual a $resultado <br>";
 
 //Operador modulo es el resto de la división
 $resultado = $a % $b;
 echo "$a entre $b da de resto $resultado";
 echo "<br>";

//Post-Incremento. Post-incremento: devuelve el valor y luego lo incremente. 
$resultado = $a++; //1º $resultado = $a; 2º $a = $a + 1;
echo "El valor de a con post-incremento es: $a. El valor de resultado es $resultado <br>";

//Pre-Incremento
$resultado = ++$a; //1º $a = $a + 1; 2º $resultado = $a
echo "el valor de a con pre-incremento es: $a. El valor de resultado es $resultado <br>";

//Post-Decremento
$a = 20;
$resultado = $a--; //1º $resultado = 20; 2º $a = $a -1 . $resultado = 20; $a = 19
echo "El valor de a con post-decremento es: $a. El valor de resultado es $resultado <br>";

//Pre-Decremento
$a = 20;
$resultado = --$a; //1º $a = $a -1 ; 2º $resultado = $a
echo "el valor de a con pre-decremento es: $a. El valor de resultado es $resultado <br>";

//Asignacion con operadores
$a = 20;
$a += 10; //$a = $a + 10
echo "El valor de 20  += 10 es: $a <br>";

$a = 20;
$a -= 10;
echo "El valor de 20 -= 10 es: $a <br>";

$a = 20;
$a *= 10;
echo "El valor de 20 *= 10 es: $a <br>";

$a = 20;
$a /= 10;
echo "El valor de 20 /= 10 es: $a <br>";

//Prioridad de operadores
$resultado  = 2 + 3 * 5;
echo "El valor de 2 + 3 * 5 es $resultado <br>";

$resultado  = (2 + 3) * 5;
echo "El valor de (2 + 3) * 5 es $resultado <br>";

?>