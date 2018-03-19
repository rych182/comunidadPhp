<?php
//imprimir un atributo privado y protegido en un metodo publico en una clase PADRE
//imprimir un atributo privado y protegido en un metodo publico en una clase heredada.


class padre 
{
	public $nombre = "Ricardo";
	public $apellido = "Garrido";
	private $salario = "";

	protected function imprimir()
	{
		echo "<br>Hello!!!!!!!!<br>";
	}

	public static $nombre2 = "Sutano";
	public static function hola()
	{
		echo "Soy un static y no necesitan instanciarme, wuju!!!";
	}
}


class hijo extends padre
{
	public function modificar($baro)
	{
		$this->salario=$baro;
	}

	public function mostrar()
	{
		$this->imprimir();
		echo "Mi nombre es $this->nombre $this->apellido y mi sueldo es $this->salario";
	}
}


$a= new hijo;
$a->modificar('5');
$a->mostrar();
echo "<br>El nuevo nombre es: " .padre::$nombre2 . "<br>";
padre::hola();


//$a->imprimir();





















/*

class hola 
{
	public $nombre = "Ricardo";
	private $apellido = "Garrido";
	protected $salario = "";
	
	protected function imprimir()
	{
		echo "Soy una función protegida y heredada, por eso para poder visualizarme, me mandaron llamar desde una función hija que es pública<br>";
	}
}

class clase2 extends hola
{
	
	public function modificarSalario($camaron)
	{
		$this->salario=$camaron;
	}
	public function imprimirFuncion()
	{
		echo "El pinshi $this->nombre gana $this->salario , le dan 100 billetes de a 500<br>";
		$this->imprimir();	
	}
}

$a= new clase2;
$a->modificarSalario("50,000");
$a->imprimirFuncion();
//$a->imprimir();
*/
?>