<!DOCTYPE html>
<html lang="en">
<head>
<title>Presaberes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Presaberes project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
									<li class="active"><a href="index.php">Home</a></li>
									
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
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Estudiemos juntos para el ICFES</h1>
						<div class="home_button trans_200"><a href="#register">Inicia aquí</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	

	<!-- Register -->

	<div class="register" id="register">
		<div class="container">
			<div class="row">
				
				<!-- Register Form -->

				<div class="col-lg-6">
					<div class="register_form_container">
						<div class="register_form_title">Empecemos</div>
						<form action="conexion1.php" id="register_form" class="register_form" method="post">
							<div class="row register_row">
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" name="nombre" id="nombre" placeholder="Nombre" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="email" class="form_input" name="email" id="email" placeholder="Email" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" name="colegio" id="colegio" placeholder="Colegio">
								</div>
								<div class="col-lg-6 register_col">
									<input type="number" class="form_input" name="grado" id="grado" placeholder="Grado">
								</div>
								<div class="col">
									<button type="submit" class="form_button trans_200">Registrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Register Timer -->

				<div class="col-lg-6">
					<div class="register_timer_container">
						<div class="register_timer_title">Regístrate ahora</div>
						<div class="register_timer_text">
							<p>Con este cuestionario podrás autoevaluarte para que sepas qué necesitas mejorar para el Examen de Estado Saber 11.</p>
						</div>
						<!--<div class="timer_container">
							<ul class="timer_list">
								<li><div id="day" class="timer_num">00</div><div class="timer_ss">days</div></li>
								<li><div id="hour" class="timer_num">00</div><div class="timer_ss">hours</div></li>
								<li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
								<li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
							</ul>
						</div>-->
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
<script src="js/custom.js"></script>
</body>
</html>