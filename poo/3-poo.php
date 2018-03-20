<?php

class padre
{
	
	function __construct()
	{
		echo "Esto es el inicio<br>";
	}
	function __destruct()
	{
		echo "<br>Esto es el final";
	}
	public function __call($name,$argument)
	{
		echo "Esto es un error <b>'$name'</b>, verifíca el manual o tu código";
	}
	public function __set($name,$value)
	{
		echo "<br>Nombre: $name <br>";
	}
	public function __get($name)
	{
		echo "Usar $name<br>";
	}
	public function __isset($name)
	{
		echo "Verifica $name<br>";
	}

}
$a = new padre;
$a->hola();
$a->sutano=20;
echo $a->nuevo;
isset($b->control);










	 /* CLASE ABSTRACTA
	abstract class padre
	{
		public function hola()
		{
			echo "<br>soy un metodo público dentro de una clase abstracta";
		}
		abstract protected function miMetodo();
	}

	
	class hijo extends padre
	{
		
		function miMetodo() //el nombre del metodo debe ser igual al del padre
		{
			echo "Hola mundo";
		}
	}

$a=new hijo;
$a->miMetodo();
$a->hola();
*/
?>