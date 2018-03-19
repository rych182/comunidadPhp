<?php

class Padre 
{
	public $nombre= "";
	public $apellido= "";
	public $edad= "";
	protected $salario="";
	
	public function imprimir()
	{
		echo "$this->salario";
	}
	public static $otroNombre = "Perengano";
	public static function Hola()
	{
		echo "<br>Hola compadre!!Logre imprimir un STATIC a la primera, ahuevo!!";
	}
}


class Hijo extends Padre
{
	public function modificarSalario($lol)
	{
		if ($lol>=100000) {
			$this->salario= $lol;
		}else{
			echo "Estas muy plebe";	
		}
		
	}
	public function mostrarSalario()
	{
		echo "<br>El sueldazo del pinshi ric es de: " .$this->salario;
	}
}

$a = new Hijo;
//echo $a->edad= 30;
//echo $a->imprimir();
$a->modificarSalario('2340000');
$a->mostrarSalario();
echo "<br>El amigo de Ricardo es: " .padre::$otroNombre . "<br>";
echo padre::hola();
?>