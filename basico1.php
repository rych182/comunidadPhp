<?php

/*
Temas:
echo, variables, arreglos, concatenación, 
Operadores de comparación (==, ===, !=, <,>, =>, <=)
Operadores logicos(and, or), operadores de incremento a++ a--
*/



$numero = 1; 
$arreglo = [1,2,3];
$resultado = $numero + $arreglo[2];
echo "<h1>Este es un ECHO con h1</h1><br>";
echo "<h2>Este es un ECHO con h2</h2><br>";
echo "El resultado de la suma es: ". $resultado . "<br>";
echo "Este es el residuo: " . 5%2 ."<br>";
$a = 1;
$a = $a +1; //Esto es igual que a++;
echo $a . "<br>";

$edad = 19;
if ($edad < 18) {
	echo "Eres menor de edad y no puedes hacer ni merga";
}elseif ($edad > 18 & $edad < 22) {
	echo "Puedes portar armas y votar PERO no puedes beber";
}else{
	echo "Puedes balacear, embriagarte y votar";
}

echo "<h3 style='text-align:center;'>Soy html dentro de PHP5 con CSS3<h3>";
?>
