<!-- Imprimir del 10 al 200 de 10 en 10 con for, do y while -->

<?php
// Con while
$num = 10;
while ($num <= 200){
    echo $num." ";
    $num+=10; //$num=$num+10;  
  
} 
echo "<br>";
// Con do while
$num = 10;
do{
    echo $num." ";
    $num+=10;
}while($num <= 200);

echo "<br>";
//Con un for
for ($num=10; $num<=200; $num+=10){
    echo $num." ";
}

?>


