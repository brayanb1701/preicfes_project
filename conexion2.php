<!DOCTYPE html>
<html lang="en">
<head>
<title>Resultado</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Presaberes project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/regular.css">
<link rel="stylesheet" type="text/css" href="styles/regular_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>

<body>

<div class="super_container">

	 

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div class="logo_text">Presaberes</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="courses.php">Materias</a></li>
									<li><a href="resultados.php">Resultados</a></li>
									<li><a href="salir.php">Salir</a></li>
									
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
											<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
											<div class="search_button">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</form>
									</div>
								</div>

								<!-- Hamburger -->

								<div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="courses.php">Materias</a></li>
				<li class="menu_mm"><a href="instructors.php">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		 
	</div>
	
	 <?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();
//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$servidor	= 'localhost';
$base_datos	= 'preicfes';
$tabla	= 'respuestas';
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$total=$m1+$m2+$m3+$m4+$m5;
$materia=$_POST['materia'];

$fecha = date("Y-m-d");
$hora = date("H:i:s");

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT email "
		."FROM ".$base_datos.".".$tabla." WHERE email='".$_SESSION["email"]."'";
		$sql = mysqli_query($conexion,$sql);
		$num_rows=mysqli_num_rows($sql);
			if($num_rows!=0){
				$sql = "UPDATE ".$base_datos.".".$tabla."
				SET $materia=$total
				WHERE email='".$_SESSION["email"]."'"; 
				$sql = mysqli_query($conexion, $sql); 
				$sql = "UPDATE ".$base_datos.".".$tabla."
				SET final=matematicas+lectura+sociales+ciencias+ingles
				WHERE email='".$_SESSION["email"]."'"; 
				//echo $sql;
				$sql = mysqli_query($conexion, $sql); 
			} 	
		else{

			$sql = "INSERT INTO ".$base_datos.".".$tabla."(nombre,email,".$materia.",final)"
			." VALUES('".$_SESSION["nombre"]."','".$_SESSION["email"]."',$total,$total)"; 
			 //echo $sql;   
			//$sql = mysql_query($sql, $conexion); 
   			//echo $sql;
			$sql = mysqli_query($conexion, $sql); 
			
		
		}



}
?>


	<!-- Regular -->

	<div class="regular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="regular_content">
						<div class="regular_title">Resultado <?php echo $materia; ?></div>
						<div class="regular_text">
							<p>
							Pregunta 1: <?php if($m1==1) echo " Correcta"; else echo " Incorrecta"; ?>
							</p>
							<p>
							Pregunta 2: <?php if($m2==1) echo " Correcta"; else echo " Incorrecta";  ?>
							</p>
							<p>
							Pregunta 3: <?php if($m3==1) echo " Correcta"; else echo " Incorrecta";  ?>
							</p>
							<p>
							Pregunta 4: <?php if($m4==1) echo " Correcta"; else echo " Incorrecta";  ?>
							</p>
							<p>
							Pregunta 5: <?php if($m5==1) echo " Correcta"; else echo " Incorrecta";  ?>
							</p>
							<p>TOTAL: <?php echo $total; ?>/5
							<br>
							<p><form action="courses.php"><button type="submit" class="form_button trans_200">Regresar a Materias</button></form></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Footer -->

	<footer class="footer">
		<div class="footer_body">
			<div class="container">
				<div class="row">

					<!-- Newsletter -->
					<div class="col-lg-3 footer_col">
						<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
							<div class="footer_logo mb-auto"><a href="#">Presaberes</a></div>
							
					</div>

					
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/regular.js"></script>
</body>
</html>