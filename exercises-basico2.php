<?php

/*1-funcion de lo que sea LISTO
2-funcion con 2 parametros LISTO
3-funcion con 3 parametros LISTO
4-funcion usando for LISTO
4.1Funcion for usando doble parametro LISTO
5-funcion usando foreach LISTO
5.1-funcion con doble parametro usando foreah LISTO
6-funcion usando if y doble parametros 
*/

function primeraFuncion()
{
	echo "Hola, soy una suma<br>2+2= " . (2+2);
	
}
primeraFuncion();
echo "<br><br><hr><br>";
/*--------------------------------------------------------------------*/

echo "Hola, soy una función con 2 parametros<br>";
function segundaFuncion($a,$b)
{
	echo "Hola, soy otra suma, $a + $b = " . ($a + $b);
}
segundaFuncion(8,11);
echo "<br><br><hr><br>";

/*--------------------------------------------------------------------*/
echo "Soy una función con 3 parametros<br>";
function tercerFuncion($c,$d,$f)
{
	echo "El youtuber $c es $d pero $f";
}
tercerFuncion("Escorpion Dorado","vulgar","chingon");
echo "<br><br><hr><br>";

/*--------------------------------------------------------------------*/
function cuartaFuncion(){
	for ($i=1; $i <11 ; $i++) { 
		echo "Estoy imprimiendo los números del 1 al 10, este es el número: " . $i . "<br>";
	}
}
cuartaFuncion();
echo "<br><br><hr><br>";
/*--------------------------------------------------------------------*/

function quintaFuncion($g,$value)
{
	for ($e=1; $e < 11; $e++) { 
		echo "$value $g, $g x $e = " . $e*$g . "<br>";
	}
	
}
quintaFuncion(4,"Esta es la tabla del");
echo "<br><br><hr><br>";
/*--------------------------------------------------------------------*/

function sextaFuncion(){
	$frikys = ["Otakus","Geeks", "Darketos", "Emos", "Ñoños"];
	foreach ($frikys as $key => $value) {
		echo "Los weyes mas raros son: " . $value . "<br>";
	}
}
sextaFuncion();
echo "<br><br><hr><br>";
/*--------------------------------------------------------------------*/

function septimaFuncion($l,$ll){
	$perros = ["Cocochon","Toski", "Bellaciao"];
	foreach ($perros as $key1 => $value1) {
		echo  $l . $value1 . $ll;
	}
}
septimaFuncion("Mis perras son: ","<br>");
echo "<br><br><hr><br>";
/*--------------------------------------------------------------------*/

function octavaFuncion()
{
	$r = 16;
	if ($r < 18) {
		echo "Eres menor de edad morro!";
	}else{
		echo "Ya estás peludo morro";
	}
}
octavaFuncion();
?>