<?php
//var_dump(var): La variable muestra informacion sobre una variable, incluido el tipo y valor. Es la primera toma de contacto con arrays.
$a = 22;
echo var_dump($a)."<br>"; //lo que imprime es: int(22)

$b = "Hola Mundo";
echo var_dump($b)."<br>"; //Lo que imprime es: string(10) "Hola Mundo" (El 10 se refiere a los caracteres)

$c = 22.5;
echo var_dump($c)."<br><br>"; // Lo que imprime es: float(22.5)

$d = array("rojo", "verde", "azul");
echo var_dump($d)."<br><br>"; //Lo que imprime es: array(3) { [0]=> string(4) "rojo" [1]=> string(5) "verde" [2]=> string(4) "azul" }

$e = array(22, "Hola Mundo", 22.5, array("rojo","verde","azul"));
echo var_dump($e)."<br><br>"; //Lo que imprime es: array(4) { [0]=> int(22) [1]=> string(10) "Hola Mundo" [2]=> float(22.5) [3]=> array(3) { [0]=> string(4) "rojo" [1]=> string(5) "verde" [2]=> string(4) "azul" } }

echo var_dump($a, $b); //Lo que imprime es: int(22) string(10) "Hola Mundo


?>