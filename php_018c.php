<?php 

$a = 20;
$b = 20;

if ($a > $b){
    print("A es mayor que B y su valor es". $a);
}else{
    if($a<$b){
        print($a. "B es mayor que A y su valor es". $b);
    }else{
        print("A y B son iguales y su valor es ". $b);
    }
}

//con elseif
if ($a>$b){
    print("A es mayor que B y su valor es". $a);
}elseif($a<$b){
    print($a. "B es mayor que A y su valor es". $b);
}else{
    print("A y B son iguales y su valor es ". $b);
}

?>