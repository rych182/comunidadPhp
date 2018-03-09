<?php

	$gustos = ['asiaticas','bets','investments','business','sex'];

	echo $gustos[0] . "<br>";


	for ($i=1; $i <= 10 ; $i++) { 
		echo $i . "<br>";
	}

	for ($a=0; $a <= 10 ; $a++) { 
		echo "1 x " . $a . " = " . $a . "<br>";
	}
	echo "Esta es la tabla del 2<br>";
	
	for ($b=0; $b <= 10; $b++) { 
		echo "2 x " . $b . " = " . $b*2 . "<br>";
	}

	echo "<br><br>Esta es la tabla del 7 <br>";
	for ($c=0; $c <=10 ; $c++) { 
		echo "7 x " . $c . " = " . $c*7 . "<br>";
	}

	echo "<br><br>Experimento de imprimir arreglo<br>";
	for ($d=0; $d <5 ; $d++) { 
		echo "Things that like Rick: " . $gustos[$d] . "<br>";
	}

	echo "<br><strong>Ejercicio usando foreach</strong><br>";

	$currency["Mexico"] = "Mexican peso";
	$currency["Canada"] = "Canadian dollar";
	$currency["USA"] = "American dollar";
	$currency["Guatemala"] = "Quetzal";
	$currency["Colombia"] = "Colombian peso";
	$currency["Venezuela"] = "Bolivar";
	$currency["Peru"] = "Soles";
	$currency["Argentina"] = "Argentine peso";
	$currency["Brasil"] = "Real";
	$currency["Spain"] = "Euro";
	$currency["Russia"] = "Rublo";
	$currency["Japan"] = "Yen";
	$currency["South Korea"] = "Won";
	$currency["China"] = "Yuan";
	$currency["Australia"] = "Australian dollar";
	$currency["England"] = "Pound";
	$currency["New Zeland"] = "New Zeland dollar";
	$currency["Singapore"] = "Singapore dollar";


	foreach ($currency as $key => $value) {
		echo "The currency from ". $key . " is " . $value . "<br>";
	}

	echo "<br><br>foreach using array gustos<br>";
	foreach ($gustos as $key => $value) {
		echo "Rick likes the " . $value . "<br>";
	}

	echo "<br>I'm testing include from php<br>";
	include_once("include.php");
	echo "<br>hELLO World";
	include_once("include.php");
	echo "<br>Example about functions<br><br>";


	loquesea($gustos,"Rick likes the ");//The function is in the file include.php
	echo "<br><br>";
	loquesea($currency,"The curriencies are ");//The function is in the file include.php
	require 'require.php';
?>