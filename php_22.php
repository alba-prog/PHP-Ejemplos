<!-- BUCLE FOR
BUCLE: Estructura de programacion que se usa para repetir un determinado codigo un numero determinado de veces.
Bucle FOR: conocemos de antemano el numero de veces que quiero repetir la accion.
FOR lleva implicito 3 parámetros: la inicializacion, la condicion y el incremento o decremento.
for (inicializacion ; condicion ; incremento o decremento){
    bloque de código
}
-->
<?php
// Imprimir del 1 al 100
for ($i = 1 ; $i <= 100; $i++ ){
    echo "$i. ";
}
// Imprimir del 1 al 100
for ($i = 1 ; $i <= 100; $i++ ){
    
    if ($i == 100){
        echo "$i. ";
    }else{
        echo "$i,  ";
    }
    //otra forma: $msg = ($i == 100) ? "$i. ":"$i, "; en otra linea echo $msg;
}

?>

