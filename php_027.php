<!-- Poner bordes a las tablas de multiplicar del ejercicio anterior -->

<?php

for ($i=1;$i<=10;$i++){

    echo "<table style='border: 2px solid green; border-collapse: collapse; margin: 10px auto'>";
    /*echo "<tr>";
        echo "<th colspan='5'>Tabla del $i</th>";
    echo "</tr>";*/
    echo "<tr> <th colspan='5'> Tabla del $i </th> </tr>";

    for ($num=1;$num<=10;$num++){
        $resultado = $i*$num;
        echo "<tr><td style='border: 1px solid green; padding: 5px'>$i</td><td style='border: 1px solid green; padding: 5px'>x</td><td style='border: 1px solid green; padding: 5px'>$num</td><td style='border: 1px solid green; padding: 5px'>=</td><td style='border: 1px solid green; padding: 5px'>$resultado</td></tr>";
    }
    echo "</table>";
    echo "<br>";
}


?>