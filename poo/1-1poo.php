<?php

class MiClaseDePHP
{
	//Propiedades
	public $nombre = "Ricardo";
	protected $apellidoPaterno = "Garrido";
	private $apellidoMaterno = "Cruz";
	
	//Metodos
	public function accion()
	{
		echo "Hola mundo!<br>";
		echo "Mi apellido es $this->apellidoMaterno";
	}
}

$a = new MiClaseDePHP;
$a->accion();

/* MODIFICANDO UNA PROPIEDAD PÚBLICA DESDE EL OBJETO
echo "<br>";
echo $a->nombre="Luis";
*/
?>