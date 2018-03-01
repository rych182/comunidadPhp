<?php


/*Asi se hace un objeto en COMUNIDAD PHP
class MiClase
{
	
	public $nombre = "Ricardo";
	public $apellido = "Garrido";

	function imprime()
	{
		echo "Esto es un hola mundo joder!!";
	}
}

$a = new MiClase;
echo $a->apellido;
*/

class Chompus
{

	public $procesador;
	public function imprime()
	{
		echo "Quiero una compu com procesador $this->procesador pero toy jodido vale verga";
	}
}

$a = new Chompus;
$a -> procesador = "i7";
$a -> imprime();
?>