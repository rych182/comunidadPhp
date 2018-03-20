<?php

class padre
{
	public $nombre = "Ricardo";
	public $apellido = "Garrido";
	public $salario = "";

	public function imprimir()
	{
		echo "Mi nombre es $this->nombre $this->apellido";
	}
}

class hijo extends padre
{
	
	public function modificar($camaron)
	{
		$this->salario = $camaron;
	}

	public function mostrar()
	{
		echo "<br>Mi nombre es $this->nombre y cobro $this->salario";
	}
}

$a = new hijo;
$a->imprimir();
$a->modificar('50,000');
$a->mostrar();

?>