<?php
//CADENAS. Su posicion inicial siempre es 0
//FUNCIONES:
//strlen(): Devuleve la posicion de una cadena
//strtolower(): convierte toda la cadena a minusculas
//strtoupper(): convierte toda la cadena a mayusuclas
//strcmp(): Compara dos cadenas (sensible a mayusculas y minusculas). Devuelve 0 si son iguales, sino devolverá otro valor
//strcasecmp(): Compara dos cadenas  (insensible a mayusculas y minusculas). Devuelve 0 si son iguales, sino devolverá otro valor
//substr(): Extraer una parte de la cadena
//str_repeat(): Repite una cadena el número de veces que se especifican
//trim(): OJOOOO. Elimina espacios en blanco al principio y al final de una cadena.
//str_word_count(): Cuenta las palabras de la cadena
//strrev(): Invierte una cadena
//strpos(): Busca un texto dentro de una cadena y devuelve su posicion
//str_replace(): Reemplaza unos caracteres por otros.

//Asignar "Hola Mundo!"  a una variable

$texto = "Hola Mundo!";

//Contar el numero de palabras
echo "Número de palabras de $texto: ".str_word_count($texto)."<br>";

//Invertir la cadena
echo "Cadena invertida: ".strrev($texto)."<br>";

//Devolver posicion de una cadena. Cuenta caracteres
echo "Posicion cadena: ".strlen($texto)."<br>";

//Convertir toda la cadena a minusculas
echo "Cadena en minusculas: ".strtolower($texto)."<br>";

//Convertir toda la cadena a mayusculas
echo "Cadena en mayusculas: ".strtoupper($texto)."<br>";

//Repetir una cadena el numero de veces que se especifique
echo "Repetir cadena 2 veces: ".str_repeat($texto ,2)."<br>";

//Extraer una parte Mundo de la cadena, te devuelve la posicion 
echo "La posicion de 'Mundo': ".strpos($texto, "Mundo")."<br>";

//Reemplazar la cadena 'Mundo' por 'Dolly'
echo "Reemplazo de 'Mundo' por 'Dolly': ".str_replace("Mundo","Dolly",$texto)."<br>";

//Longitud de la cadena
echo "Longitud de la cadena:'$texto': ".strlen($texto)."<br><br>";

//Comparar cadenas sensibles mayusculas y minusculas. 
echo "Comparacion de 'Hola' y 'hola': ".strcmp('Hola', 'hola')."<br>"; //Devuelve -1 (si es menor en comparacion en binario)
echo "Comparacion de 'Hola' y 'Hola': ".strcmp('Hola', 'Hola')."<br>";//Devuelve 0

//Comparar cadenas insensible. Devuelve 0
echo "Comparacion de 'Hola' y 'hola': ".strcasecmp('Hola', 'hola')."<br>";//Devuelve 0
echo "Comparacion de 'Hola' y 'ola': ".strcasecmp('Hola', 'ola')."<br><br>";//Devuelve -7

//Extraer 3 caracteres a partir del caracter 5, el quinto caracter si lo coge
echo "subcadena de '$texto':".substr($texto, 5, 3)."<br>";

//Extraer caracteres a partir del caracter 5, el quinto caracter si lo coge
echo "subcadena a partir del caracter 5 '$texto':".substr($texto, 5)."<br><br>";

//Repetir la cadena 'Hola' 3 veces
echo "Repetir la cadena 'Hola' 3 veces: " . str_repeat("Hola " , 3)."<br>";

//Eliminar espacios en blanco
$texto2 = "       Hola Mundo       ";
echo "Cadena con espacios eliminados: " . trim($texto2)."<br>";
echo $texto2;
?>