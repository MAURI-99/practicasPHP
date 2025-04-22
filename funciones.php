<?php
//Funcion sin parametros 
function saludo(){
    echo "Buenas tardes. La fecha de hoy es:"."</h2>";
    echo date ('Y-m-d')."</h2>"."<br>";
}

//Funcion con envio parametros 
function saludar($nombre, $apellido){
    echo "Buenas tardes, ".$nombre." ".$apellido."</h2>";

}

//funcion multiplicar dos numeros 
function multiplicar ($a,$b,$c){ 
    echo "<h2>"."EL resultado es: ".$a*$b*$c."</h2>";
}


function areaCirculo ($radio){ 
    echo "El area del circulo es ".pi()*pow($radio,2); 
}

function areaCuadrado($lado){
    return pow($lado,2); 
}

echo "<h1>"."Funciones en PHP"."</h1><br>";
echo saludo(); 
echo saludar (" Darwin", "Armijos")."<br>"; 
echo multiplicar (2,3,4); 
$r = 5; 
echo areaCirculo($r)."<br>"; 
$lado = 2; 
$lado = 2; 
echo "Área del cuadrado con lado $lado es: " . areaCuadrado($lado) . "<br>";

?>