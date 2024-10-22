<?php
    //$$var : La variable de una variable. Solo se usa en situaciones claras como este ejemplo, en codigos largos o grandes no se utiliza.
    $var = "ciudad";
    $$var= "Madrid"; //Esto es como poner $ciudad="Madrid"
    print($var)."<br>";
    print($$var);
    echo '<br>';
    print($ciudad);
?>