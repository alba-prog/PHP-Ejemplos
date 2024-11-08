<?php
    //Programa que escribe número de uno a 500 y se repite hasta que aparece un multiplo de 7. Pero como mucho se repite 8 veces.

    $salir = false; //variable centinela
    $i = 0; //Variable contador

    while ($salir == false && $i<8){ // se puede poner (!$salir && $i<8)
        $num = rand(1,500);
        echo ($num. "<br>");
        $i++;
        $salir = ($num % 7 == 0);
        /*
        if ($num % 7 == 0 ){
            $salir = true;
        }
        */
    }


?>