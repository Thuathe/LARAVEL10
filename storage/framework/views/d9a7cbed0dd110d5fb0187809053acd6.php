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
						<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<li><a href="#<?php echo e($blog1->title); ?>"><?php echo e($blog1->title); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>


						</ul>
					</li>
					<li><a href="left-sidebar.html">Examples</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#about">About</a></li>
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
					<div class="col-12">
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
										<p style="min-height: 350px;"><a style="font-weight:bold;font-size:30px;"><?php echo e($blog1->title); ?></a><?php echo $blog1->content; ?></p>
										<footer>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file-alt">Examples</a></li>

											</ul>
										</footer>
									</section>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>

							</div>
						</section>

					</div>
				</div>
			</div><br><br><br><br><br><br><br><br>
		</section>

		<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md">
					<div id="about"class="col-md-4 fh5co-widget">
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
						<?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<li><a href="#<?php echo e($blog1->title); ?>"><?php echo e($blog1->title); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<?php endif; ?>
							
							
						</ul>
					</div>

					<div id="contact"class="col-md-4 col-md-push-1 fh5co-widget">
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

</html><?php /**PATH C:\xampp\htdocs\LARAVEL10\resources\views/blog/index.blade.php ENDPATH**/ ?>