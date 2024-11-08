<!--Imprimir los numeros impares menores de 100 con un bucle while-->
<?php

$i = 1;
while ($i < 100){
    $i++;
    if ($i%2 != 0){
        echo $i." ";   
    }    
}

?>