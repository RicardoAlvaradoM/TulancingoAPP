<?php 
function connectDB(){

	$server = "localhost";
	$user = "root";
	$pass = "toor";
	$bd = "tulapp";

	$conect = mysqli_connect($server,$user,$pass,$bd)

	or die("Ha ocurrido un problema con la conexion a bd");

	return $conect;
}

 ?>