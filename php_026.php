<!-- Hacer un programa que muestre las tablas de multiplicar. Debe haber un encabezado h3 como título de cada tabla(estamos poniendo html dentro de php"<h3>"</h3>)-->
<?php

for ($i=1;$i<=10;$i++){
    echo "<h3>Tabla del $i </h3>";
    for($num=1;$num<=10;$num++){
        $resultado= ($i*$num);
        echo "$i x $num = $resultado <br>";
        
    }
}
?>