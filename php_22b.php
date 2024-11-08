<!--Transformamos el siguiente for en un bucle --> 
<?php
    
    /*for ($i = 1; $i <= 100; $i++){
        echo $i." ";
    }*/

    //transformamos ese for en un bucle WHILE
    //WHILE tiene la condicion antes de entrar en el bucle, por lo tanto, cuidado!! Puede que NUNCA se llegue a entrar. While es un bucle que se ejecuta mientras se cumpla una condicion, no lleva inicializacion, por tanto, hay que hacerlo fuera del bucle.
    //While no lleva incremento o decremento, hay que hacerlo dentro del bucle.

    $i = 1;
    while ($i <= 100){
        echo $i." ";
        $i++;
        
    }

    //DO: La condicion se ejecuta al final. ¡OJO! Al menos se ejecuta el bucle una vez.
    //Se tiene que inicializar la variable
    echo "<br> Con bucle DO <br>";
    $j = 1;
    do{
        echo $j." ";
        $j++;
    }while($j <= 100);

    // de otra forma, pero esto imprimiria del 2 al 101
    echo "<br> Con bucle DO <br>";
    $j = 1;
    do{
        $j++;
        echo $j." ";

    }while($j <= 100);

    // de otra forma, esta si imprime de 1 al 100, se quita la condicion = para que no entre al 101
    echo "<br> Con bucle DO y incremento antes de imprimir. Ojo con la condición <br>";
    $j = 0;
    do{
        $j++;
        echo $j." ";
    }while($j < 100);





?>