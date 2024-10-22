<?php
//(int)var Convertir una variable a numero Entero
    $var1 = 5.9;
    $var2 = (int)$var1;
    echo $var1."<br>"; //El punto concatena
    //echo "$var1 <br>"; //este funciona
    //echo '$var1 <br>'; //esto no funciona porque lo interpreta todo como cadena de texto, no detecta el valor de una variable
    echo $var2;
?>