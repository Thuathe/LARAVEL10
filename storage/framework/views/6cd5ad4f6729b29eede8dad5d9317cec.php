<!DOCTYPE HTML>
<html>

<head>
	<title>Coding's</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/man.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">

			<!-- Logo -->
			<img src="assets/img/logo.png" width="70px" alt="">
			<h1>
				<a href="index.html" class="text-white">Coding's</a>
			</h1>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="#header">Home</a></li>
					<li>
						<a href="#">Categories</a>
						<ul>
							<li><a href="#">php</a></li>
							<li><a href="#">JavaScript</a></li>
							<li><a href="#">Python</a></li>
							<li><a href="#">Java</a></li>
							<li><a href="#">Angular</a></li>
							<li><a href="#">React</a></li>
							<li><a href="#">C++</a></li>
							<li><a href="#">HTML5</a></li>
							<li><a href="#">Nuxtjs</a></li>
						</ul>
					</li>
					<li><a href="left-sidebar.html">Examples</a></li>
					<li><a href="right-sidebar.html">Contact</a></li>
					<li><a href="no-sidebar.html">About</a></li>
					<li class="current"><a href="no-sidebar.html">Login</a></li>
				</ul>
			</nav>

			<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Your Career in Web Development Start Here
					</h2>
					<p>it's easier to learn programming languages with this website</p>
				</header>
			</section>

		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<!-- Daftar -->
					<div class="col-12">
					<br><br>
						<!-- Portfolio -->
						<section>
							<header class="major">
								<h2>Find the Best Programming Language</h2>
							</header>
							<br><br><br><br><br>
							<div class="row">
							<?php $__empty_1 = true; $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<a href="#">
											<img style="width: 30%;" src="<?php echo e(asset('/storage/blog/'.$blog1->image)); ?>" alt="" />
											<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">php</h2>
										</a>
									</section>
								</div>
								<?php endif; ?>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/js.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Java Script</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/react.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">React</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/java.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Java</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/angular.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Angular</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/python.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Python</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/html5.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Html5</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/nuxtjs.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">Nuxtjs</h2>
									</section>
								</div>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<img style="width: 30%;" src="img/c++.png" alt="" />
										<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;">C++</h2>
									</section>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12">
						<!-- Blog -->
						<br><br><br><br><br>
						<section>
							<header class="major">
								<h2>Programming Language Definition.</h2>
							</header>
							<br><br><br>
							<div class="row">
								<div id="php"class="col-6 col-12-small">
									<section class="box">
									<img style="width:25%;" src="img/php.png" alt="" />
									<br><br>
										<p style="min-height: 350px;"><a style="font-weight:bold;font-size:30px;">PHP</a> which stands for Hypertext Preprocessor, is a widely-used server-side scripting language for developing dynamic websites and web applications. It can be embedded within HTML code and executed on the server side, generating dynamic content that can be displayed in the user's browser. With syntax similar to C and Perl, PHP allows developers to access databases, manage forms, create user sessions, and perform various other web programming tasks. As one of the most popular web programming languages, PHP supports a wide range of databases and web platforms, making it a top choice for developers aiming to create interactive and dynamic websites.</p>
										<footer>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file-alt">Examples</a></li>

											</ul>
										</footer>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section class="box">
									<img style="width:25%;" src="img/js.png" alt="" />
									<br><br>
										<p style="min-height: 350px;"><a style="font-weight:bold;font-size:30px;">JavaScript</a> is a versatile, high-level programming language primarily known for its use in web development. It enables interactive and dynamic features on websites, allowing developers to create responsive user interfaces and enhance user experience. Unlike most programming languages, JavaScript runs directly in web browsers, enabling client-side scripting and reducing the need for constant communication with the server. It is commonly used for tasks such as form validation, animation, asynchronous data loading (AJAX), and building interactive web applications. JavaScript is also a fundamental component of modern web technologies, including frameworks like React, Angular, and Vue.js, making it essential for front-end and full-stack developers aiming to create sophisticated and interactive web applications.</p>
										<footer>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file-alt">Examples</a></li>

											</ul>
										</footer>
									</section>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>About</h4>
					<p>Coding's site is an online learning platform specifically designed to facilitate users in learning computer programming in an interactive and effective way. We are committed to creating a learning environment that supports and motivates our users, helping them gain expertise in the world of computer programming with confidence.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#header">Home</a></li>
						<li><a href="#">Examples</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>

					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
					<li><a href="#">php</a></li>
							<li><a href="#">JavaScript</a></li>
							<li><a href="#">Python</a></li>
							<li><a href="#">Java</a></li>
							<li><a href="#">Angular</a></li>
							<li><a href="#">React</a></li>
							<li><a href="#">C++</a></li>
							<li><a href="#">HTML5</a></li>
							<li><a href="#">Nuxtjs</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Rt 54, Rw 15, Dsn Sidem, Desa Jombok<br>Kec.Pule, Kab.Trenggalek</li>
						<li><a href="tel://1234567920">+62 822 2828 1263</a></li>
						<li><a href="mailto:info@yoursite.com">ekanandasusila9c@gmail.com</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 United. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="" target="_blank">Eka Nanda Susila</a> </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/bar.js"></script>


</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/blog/index1.blade.php ENDPATH**/ ?>