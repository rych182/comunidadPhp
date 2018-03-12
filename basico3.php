<?php
//GET se convierte en un arreglo donde se almacenan todos los valores que llegan por la URL
//print_r($_GET);
//$nombreUsar = $_GET["dato1"];
//$edad = $_GET["edad"];
$nombreUsar = $_POST["dato1"];
$edad = $_POST["edad"];
echo "Hola amigo: ". $nombreUsar;
echo "<br>Edad: " . $edad;
if ($edad >= 18) {
	echo "<br>Tas peludo ya cabrón!";
}else{
	echo "<br>Tas morro, abrete alv!!";
}
?>