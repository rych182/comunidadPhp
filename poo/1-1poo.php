<?php
/*
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


*/
/* MODIFICANDO UNA PROPIEDAD PÚBLICA DESDE EL OBJETO
echo "<br>";
echo $a->nombre="Luis";
*/




class imprimir 
{

	function __construct($var){//Esto es el pinshi constructor
		echo "Este es un pinshi constructor, un metodo mágico<br> y esta madre se vuelve a imprimir cada vez que se instancia un objeto(instanciar = crear)<br>";
		$this->apellidoPaterno = $var;
	}
	public $nombre = "Ricardo";
	protected $apellidoPaterno = "Garrido";
	private $apellidoMaterno = "Cruz";
	
	public function loquesea($palabra,$asiatica)
	{
		//echo "Hello world!<br>";
		//echo "$this->apellidoPaterno" . $palabra . $asiatica;
		echo "$this->apellidoPaterno";
	}

}

$a = new imprimir('Carmen, me quede en el min 53');
$a->loquesea('Primer parametro','Segundo parametro');
//$b = new imprimir;
//$a -> loquesea(" es la verga!", "ALV, esto lo van a leer en stackoverflow!.");







































?>