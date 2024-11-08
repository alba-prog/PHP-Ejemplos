<?php
//if normal y con operador ternario
    $a = 8;
    $b = 5;
    //if normal
    if ($a > $b){
        echo "$a es mayor que $b"."<br>";
    }else{
        echo "$a es menor que $b"."<br>";
    }
    //con operador ternario. La ? es entonces, y los : es sino (else)
    $resultado = ($a > $b) ? "$a es mayor que $b con ternario" : "$a es menor que $b";
    echo "$resultado";
    

?>