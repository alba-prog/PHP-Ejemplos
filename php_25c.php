<!--Ejercicio con bucle CENTINELA. Hay una variable que me dice si nos salimos del bucle al cumplirse una condición.
Programa que escribe numeros aleatorios entre uno y quinientos y se pare cuando el numero sea multiplo de 7.
-->

<?php
    $salir = false;

    while (!$salir){ //mientras sea falso
        $num = rand(1,500);
        echo "$num <br>";
        $salir = ($num%7 == 0); //el centinela vale verdadero si es multiplo de 7
        
        /*if ($num%7 == 0){ ESTO ES LO MISMO QUE LA LINEA DE ARRIBA
            $salir=true;
        }*/
        
    }

    // otro ejemplo
    $i=1;
    while ($i<4){
        $num = rand(1,500);
        echo "$num <br>";
        $i = ($num%7 == 0);

    }


?>
