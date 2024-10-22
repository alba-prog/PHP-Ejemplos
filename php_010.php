<?php
    //settype

    $var = 7.5;

    settype($var, "integer");

    print($var); //Imprimirá 7, desprecia la parte decimal y se queda con la parte de numero entero.


?>