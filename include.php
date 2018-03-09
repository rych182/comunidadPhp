<?php
	echo "Hi, I'm a file called include.php<br>";

	function loquesea($werever,$text)
	{
		require 'require.php';
		foreach ($werever as $key => $value) {
		echo $text . $value . "<br>";
		}
	}
?>