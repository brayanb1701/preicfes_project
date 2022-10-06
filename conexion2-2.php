<?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();
$servidor	= 'localhost';
$base_datos	= 'matematicas';
if($_SESSION["categoria"]==1){
$tabla	= 'secundaria1';
}
if($_SESSION["categoria"]==4){
$tabla	= 'secundaria2';
}
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= ''; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);

$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
//-- Captura de las variables del formulario.

//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$distancef=time()-($_SESSION["horafija"]/1000);
$nombre=$_SESSION['name'];
$ronda=$_REQUEST['ronda'];

if($_SESSION["categoria"]==1){
if($ronda==1){
if($_POST['a1']==54){
$a1=3;}else{
	$a1=0;
}

if($_POST['b1']==9800){
$b1=3;}else{
	$b1=0;
}


if($_POST['c1']==5){
$c1=3;}else{
	$c1=0;
}
 
 
 if($_POST['d1']==3600){
$d1=3;}else{
	$d1=0;
}

if($_POST['e1']==900){
$e1=3;}else{
	$e1=0;
}

if($_POST['f1']==16){
$f1=3;}else{
	$f1=0;
}

if($_POST['g1']==20000){
$g1=3;}else{
	$g1=0;
}

if($_POST['h1']==27000){
$h1=3;}else{
	$h1=0;
}

if($_POST['i1']==135000){
$i1=3;}else{
	$i1=0;
}

if($_POST['j1']==150){
$j1=3;}else{
	$j1=0;
}

$resultado=$a1+$b1+$c1+$d1+$e1+$f1+$g1+$h1+$i1+$j1;

$tiempo2=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "INSERT INTO ".$base_datos.".".$tabla."(nombre,a1,b1,c1,d1,e1,f1,g1,h1,i1,j1,resultado1,tiempo1, total, tiempot)"
."VALUES('$nombre',$a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,$i1,$j1,$resultado,sec_to_time($distancef), $resultado,sec_to_time($distancef) )"; 

//$sql = mysql_query($sql, $conexion); 
//echo $tiempo."\n";
 // echo $sql;  
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["verifica2"] = true;    
//-- Se devuelve a la pagina que inicial.
header ("Location: page2.php?mensaje=Registro Incluido con Exito.");
exit(); 
}

if($ronda==2){
if($_POST['a2']==1.115){
$a2=5;}else{
	$a2=0;
}

if($_POST['b2']==10){
$b2=5;}else{
	$b2=0;
}


if($_POST['c2']==8000000){
$c2=5;}else{
	$c2=0;
}
 
 
 if($_POST['d2']=="Jenny"){
$d2=5;}else{
	$d2=0;
}

if($_POST['e2']==7500){
$e2=5;}else{
	$e2=0;
}



$resultado=$a2+$b2+$c2+$d2+$e2;

//$tiempo2=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "UPDATE ".$base_datos.".".$tabla."
		SET a2=$a2,b2=$b2,c2=$c2,d2=$d2,e2=$e2,resultado2=$resultado,  tiempo2=sec_to_time($distancef) , total=resultado1+$resultado, tiempot=tiempo1+sec_to_time($distancef)
		WHERE nombre='$nombre'"; 
//echo $sql;
//$sql = mysql_query($sql, $conexion); 
    
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["verifica3"] = true;    
//-- Se devuelve a la pagina que inicial.
header ("Location: page3.php");
exit(); 

}
if($ronda==3){
if($_POST['a3']==8){
$a3=5;}else{
	$a3=0;
}

if($_POST['b3']==27){
$b3=5;}else{
	$b3=0;
}


if($_POST['c3']==5){
$c3=5;}else{
	$c3=0;
}

$resultado=$a3+$b3+$c3;
$tiempo3=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "UPDATE ".$base_datos.".".$tabla."
		SET a3=$a3,b3=$b3,c3=$c3,resultado3=$resultado,tiempo3=sec_to_time($distancef),total=resultado1+resultado2+$resultado  
		WHERE nombre='$nombre'"; 
$sql = mysqli_query($conexion, $sql); 

$sql = "UPDATE ".$base_datos.".".$tabla."
		SET tiempot=sec_to_time(time_to_sec(tiempo1)+time_to_sec(tiempo2)+time_to_sec(tiempo3)) 
		WHERE nombre='$nombre'"; 
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["pezmasgato"] = false;//--Variable de seguridad    
//-- Se devuelve a la pagina que inicial.
header ("Location: salir.php");
exit(); 

}
}

if($_SESSION["categoria"]==4){
if($ronda==1){
if($_POST['a1']=="Empezara a regarse"){
$a1=3;}else{
	$a1=0;
}

if($_POST['b1']==50){
$b1=3;}else{
	$b1=0;
}


if($_POST['c1']==15){
$c1=3;}else{
	$c1=0;
}
 
 
 if($_POST['d1']=="1/10"){
$d1=3;}else{
	$d1=0;
}

if($_POST['e1']=="21 y 14"){
$e1=3;}else{
	$e1=0;
}

if($_POST['f1']==96){
$f1=3;}else{
	$f1=0;
}

if($_POST['g1']=="3h 44’"){
$g1=3;}else{
	$g1=0;
}

if($_POST['h1']==180){
$h1=3;}else{
	$h1=0;
}

if($_POST['i1']=="3 h 31 10"){
$i1=3;}else{
	$i1=0;
}

if($_POST['j1']==4){
$j1=3;}else{
	$j1=0;
}

$resultado=$a1+$b1+$c1+$d1+$e1+$f1+$g1+$h1+$i1+$j1;

$tiempo2=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "INSERT INTO ".$base_datos.".".$tabla."(nombre,a1,b1,c1,d1,e1,f1,g1,h1,i1,j1,resultado1,tiempo1, total, tiempot)"
."VALUES('$nombre',$a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,$i1,$j1,$resultado,sec_to_time($distancef), $resultado,sec_to_time($distancef) )"; 

//$sql = mysql_query($sql, $conexion); 
//echo $tiempo."\n";
 // echo $sql;  
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["verifica2"] = true;    
//-- Se devuelve a la pagina que inicial.
header ("Location: page2.php?mensaje=Registro Incluido con Exito.");
exit(); 
}

if($ronda==2){
if($_POST['a2']=="1+AB"){
$a2=5;}else{
	$a2=0;
}

if($_POST['b2']=="Disminuyo 1%"){
$b2=5;}else{
	$b2=0;
}


if($_POST['c2']==8){
$c2=5;}else{
	$c2=0;
}
 
 
 if($_POST['d2']==270){
$d2=5;}else{
	$d2=0;
}

if($_POST['e2']=="50 cm²"){
$e2=5;}else{
	$e2=0;
}



$resultado=$a2+$b2+$c2+$d2+$e2;

//$tiempo2=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "UPDATE ".$base_datos.".".$tabla."
		SET a2=$a2,b2=$b2,c2=$c2,d2=$d2,e2=$e2,resultado2=$resultado,  tiempo2=sec_to_time($distancef) , total=resultado1+$resultado, tiempot=tiempo1+sec_to_time($distancef)
		WHERE nombre='$nombre'"; 
//echo $sql;
//$sql = mysql_query($sql, $conexion); 
    
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["verifica3"] = true;    
//-- Se devuelve a la pagina que inicial.
header ("Location: page3.php");
exit(); 

}
if($ronda==3){
if($_POST['a3']=="30.000 segundos"){
$a3=5;}else{
	$a3=0;
}

if($_POST['b3']==40){
$b3=5;}else{
	$b3=0;
}


if($_POST['c3']==7){
$c3=5;}else{
	$c3=0;
}

$resultado=$a3+$b3+$c3;
$tiempo3=date("H:i:s");

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "UPDATE ".$base_datos.".".$tabla."
		SET a3=$a3,b3=$b3,c3=$c3,resultado3=$resultado,tiempo3=sec_to_time($distancef),total=resultado1+resultado2+$resultado  
		WHERE nombre='$nombre'"; 
$sql = mysqli_query($conexion, $sql); 

$sql = "UPDATE ".$base_datos.".".$tabla."
		SET tiempot=sec_to_time(time_to_sec(tiempo1)+time_to_sec(tiempo2)+time_to_sec(tiempo3)) 
		WHERE nombre='$nombre'"; 
$sql = mysqli_query($conexion, $sql); 
    
$_SESSION["pezmasgato"] = false;//--Variable de seguridad    
//-- Se devuelve a la pagina que inicial.
header ("Location: salir.php");
exit(); 

}
}

}
?>
