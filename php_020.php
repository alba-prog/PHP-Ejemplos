<!-- Realiza el ej19 con switch-->
<?php 

 $nota=9; 
switch ($nota) { 
    case ($nota >= 0 && $nota<5): 
        echo "la nota $nota es suspenso"; 
        break; 
    case ($nota>=5 && $nota<6): 
        echo "la nota $nota es suficiente"; 
        break; 
    case ($nota >=6 && $nota <7): 
        echo "la nota $nota es bien"; 
        break;
    case ($nota >=7 && $nota <9): 
        echo "la nota $nota es notable"; 
        break;
    case ($nota >=9 && $nota <=10): 
        echo "la nota $nota es sobresaliente"; 
        break; 
    default: 
        echo "la nota $nota no es válida"; 
        break; 
} 
    
    
?>