<!DOCTYPE html>
<html lang="en">
<head>
<title>Materias</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Presaberes project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
									<li class="active"><a href="courses.php">Materias</a></li>
									<li><a href="resultados.php">Resultados</a></li>									
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
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
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
				<li class="menu_mm"><a href="salir.php">Salir</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img height="200" src="images/mate.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="mate.php">Matemáticas</a></div>
							
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="mate.php">Ir</a></div>
						</div>
					</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img height="200" src="images/lectura.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="lectura.php">Lectura Crítica</a></div>
							
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="lectura.php">Ir</a></div>
						</div>
					</div>
				</div>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img height="200" src="images/sociales.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="sociales.php">Ciencias Sociales</a></div>
							
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="sociales.php">Ir</a></div>
						</div>
					</div>
				</div>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img height="200" src="images/ciencias.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="ciencias.php">Ciencias Naturales</a></div>
							
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="ciencias.php">Ir</a></div>
						</div>
					</div>
				</div>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img height="200" src="images/ingles.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="ingles.php">Inglés</a></div>
							
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="ingles.php">Ir</a></div>
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
<script src="js/courses.js"></script>
</body>
</html>