<!-- Optimizar el php_027 poniendo los estilos en una etiqueta style aparte -->

<?php
echo "<style>
.table {
    border: 2px solid green; 
    border-collapse: collapse; 
    margin: 10px auto;
}
td {
    border: 1px solid green; 
    padding: 5px;
}
</style>";

for ($i=1;$i<=10;$i++){

    echo "<table class='table'>";
    /*echo "<tr>";
        echo "<th colspan='5'>Tabla del $i</th>";
    echo "</tr>";*/
    echo "<tr> <th colspan='5'> Tabla del $i </th> </tr>";

    for ($num=1;$num<=10;$num++){
        $resultado = $i*$num;
        echo "<tr><td>$i</td><td>x</td><td>$num</td><td>=</td><td>$resultado</td></tr>";
    }
    /*En cada td lo suyo sería poner una clase por si se quisiera poner algo diferente en alguno*/
    echo "</table>";
    echo "<br>";
}


?>