<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Coding's</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />



	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<link rel="stylesheet" href="assets/css/min.css">
	<!-- Flexslider  -->

	<!-- Theme style  -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>


<body>


	<div style="background-image: url(assets/img/bg.jpg);background-size:cover;min-height: 530px;" id="page">
		<div id="home">
		</div>
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->

			<div class="col-xs-12 text-center logo-wrap">
				<img src="assets/img/logo.png" width="70px" alt="">
				<h1>
					<div id="fh5co-logo"><a href="index.html">Coding's</a></div>
				</h1>
			</div>



			<!-- <div class="top-menu"> -->
			<div style="margin-top:65px;" class="container">
				<div class="row">

					<div id="nav" class="col-xs-12 text-center menu-1 menu-wrap">

						<ul>
							<li><a href="#home">Home</a></li>
							<li class="has-dropdown">
								<a href="gallery.html">Categories</a>
								<ul class="dropdown">
									<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<li><a href="#<?php echo e($blog1->title); ?>"><?php echo e($blog1->title); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									<?php endif; ?>

								</ul>
							</li>
							
							<li class="has-dropdown">
								<a href="gallery.html">Example</a>
								<ul class="dropdown">
								<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<li><a href="<?php echo e(route('blog.show', $blog1->id)); ?>"><?php echo e($blog1->title); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>

								</ul>
							</li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="#about">About</a></li>


						</ul>

					</div>
				</div>

			</div>
			<!-- </div> -->

			<!-- </div> -->
		</nav>

		<section style="margin-top:260px;" id="banner">
			<header>

				<h2>Your Career in Web Development Start Here
				</h2>
				<p>it's easier to learn programming languages with this website</p>
				<br>
			
			</header>
		</section>





	</div>
	<div id="page-wrapper">

		<!-- Header -->


		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<!-- Daftar -->
					<div class="col-12">
						<br><br>
						<!-- Portfolio -->
						<section>
							<header style="margin-top:-60px;"class="major">
								<h2>Find the Best Programming Language</h2>
							</header>
							<br><br><br>
							<div class="row">
								<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
								<div class="col-4 col-6-medium col-12-small">
									<section style="width:100%" class="	box">
										<a href="#<?php echo e($blog1->title); ?>">
											<img style="width: 30%;" src="<?php echo e(asset('/storage/blog/'.$blog1->image)); ?>" alt="" />
											<h2 style="width:60%;font-size:20px;margin-top:10px;float:right;"><?php echo e($blog1->title); ?></h2>
										</a>
									</section>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>
							</div>
						</section>
					</div>
					<div id="example"class="col-12">
						<!-- Blog -->
						<br><br><br><br><br>
						<section>
							<header class="major">
								<h2>Programming Language Definition.</h2>
							</header>
							<br><br><br>
							<div class="row">
								<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

								<div id="<?php echo e($blog1->title); ?>" class="col-6 col-12-small">
									<section class="box">
										<img style="width:25%;" src="<?php echo e(asset('/storage/blog/'.$blog1->image)); ?>" alt="" />
										<br><br>
										<p style="min-height: 350px;"><a style="text-decoration:none;color:#ea272d;font-weight:bold;font-size:30px;"><?php echo e($blog1->title); ?></a><?php echo $blog1->content; ?></p>
										<footer>
											<ul class="actions">

											</ul>
										</footer>
									<a href="<?php echo e(route('blog.show', $blog1->id)); ?>" style="background-color:#ea272d;"class="button icon solid fa-file-alt">Show More</a></li>
											
										

									</section>

								</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>

							</div>
						</section>

					</div>
				</div>
			</div><br><br><br><br><br><br><br><br>
			<section id="about">
				<header class="major">
					<h2>About</h2>
				</header>
				<div class="container">

					<img style="width:40%;float: left;" src="assets/img/about.png" width="400px" alt="">
					<p style="width:50%;float: right;min-height: 350px;"><a style="text-decoration:none;color:#ea272d;font-weight:bold;font-size:30px;">The Coding's</a>is a refers to the practice of writing and creating the code that powers websites and web applications. It involves using programming languages, such as HTML, CSS, JavaScript, and various server-side scripting languages like PHP, Python, or Ruby, to build the structure, design, and functionality of web-based content.

						HTML (Hypertext Markup Language) is used for structuring the content of web pages, defining headings, paragraphs, links, images, and other elements. CSS (Cascading Style Sheets) is used for styling and formatting web content, specifying colors, fonts, layout, and responsive design. JavaScript is employed for adding interactivity to web pages, making them dynamic by handling user interactions, performing validations, and communicating with web servers.

						Web coding is essential for developing websites and web applications, enabling them to display content, look visually appealing, and provide a seamless user experience. It involves writing and maintaining the codebase that powers the entire web presence, from simple static web pages to complex web applications with advanced functionalities.</p>




				</div>
			</section>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</section>


		<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo" style="background-color:black;" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md">
					<div id="codings" class="col-md-4 fh5co-widget">
						<h4>Coding's</h4>
						<p style="font-size: 13px;">Coding's site is an online learning platform specifically designed to facilitate users in learning computer programming in an interactive and effective way. We are committed to creating a learning environment that supports and motivates our users, helping them gain expertise in the world of computer programming with confidence.</p>
					</div>
					<div style="font-size: 13px;" class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Links</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#header">Home</a></li>
							<li><a href="#">Examples</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>

						</ul>
					</div>

					<div style="font-size: 13px;" class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Categories</h4>
						<ul class="fh5co-footer-links">
							<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<li><a href="#<?php echo e($blog1->title); ?>"><?php echo e($blog1->title); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<?php endif; ?>


						</ul>
					</div>

					<div style="font-size: 13px;" id="contact" class="col-md-4 col-md-push-1 fh5co-widget">
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
							<small style="font-size: 13px;" class="block">&copy; 2023 United. All Rights Reserved.</small>
							<small style="font-size: 14px;" class="block">Designed by <a style="text-decoration:none;color:#ea272d;" href="" target="_blank">Eka Nanda Susila</a> </small>
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


	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="assets/js/main.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/blog/home.blade.php ENDPATH**/ ?>