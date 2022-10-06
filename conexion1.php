<?php 
//-- variables para conectarse a la base de datos
ini_set('session.gc_maxlifetime',3600);  // 1 hora
session_start();
error_reporting(E_ALL);
ob_start();
//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$nombre=$_POST["nombre"];

$servidor	= 'localhost';
$base_datos	= 'preicfes';
$tabla	= 'registro';
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

$email=$_POST['email'];
$colegio	= $_POST['colegio'];//$_REQUEST['numero'];
$grado=$_POST['grado'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT email "
		."FROM ".$base_datos.".".$tabla." WHERE email='".$email."'";
		$sql = mysqli_query($conexion, $sql);
		$num_rows=mysqli_num_rows($sql);
			if($num_rows!=0){
				$_SESSION["nombre"] = $nombre;
				$_SESSION["email"] = $email;
				header("Location: courses.php?mensaje=Usuario ya registrado.");
				
				exit;
			} 	
		else{

			$sql = "INSERT INTO ".$base_datos.".".$tabla."(nombre,email,colegio,grado)"
			." VALUES('$nombre','$email','$colegio','$grado')"; 
			 //echo $sql;   
			//$sql = mysql_query($sql, $conexion); 
   			//echo $sql;
			$sql = mysqli_query($conexion, $sql); 
			
			$_SESSION["nombre"] = $nombre;
			$_SESSION["email"] = $email;
			header ("Location: courses.php?mensaje=Registro Incluido con Exito.");
			exit(); 
		}
}

?>
