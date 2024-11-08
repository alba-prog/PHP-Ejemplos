<?php
    //function isset
    //Comprueba si una variable está configurada, es decir, si está declarada y no es NULL. En este caso devuelve 1
    //En caso contrario decuelve 0

    //Comprueba si una variable está definida y no es NULL.
    //La funcion isset devuelve 1 si está definida la variable. 0 en caso contrario
    //El valor NULL representa una variable sin valor.
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 está inicializada y no es NULL. Su valor es: ".$var1);
    }else{
        print("La variable var1 no está configurada");
    }

    echo "<br>";
    $var2 = null;
    if(isset($var2)){
        print("La variable var2 está inicializada y no es NULL. Su valor es: ".$var2);
    }else{
        print("La variable var2 no está definida y su valor es NULL");
    }
?>