<?php
/**
 * @p2m/sb/views/portfolio/site/stylish-portfolio.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

use yii\bootstrap5\Html;

/** @var yii\web\View $this */

$this->title = 'Stylish Portfolio';
$subTitle = 'Lorem ipsum dolor sit amet';
?>
<!-- Page Content -->
<div class="container">

	<h1 class="my-4">
		<?= Html::encode($model->title) ?>
		<small>– <?= Html::encode($subTitle) ?></small>
	</h1>

	<div class="row">
		<div class="col-md-8">
			<?= Html::img($model->imageUrl, [
				'class' => 'img-fluid',
				'alt' => '',
			]) ?>
		</div>

		<div class="col-md-4">
			<h3 class="my-3">Project Description</h3>
			<p><?= Html::encode($model->summary) ?></p>

			<h3 class="my-3">Details</h3>
			<ul>
				<li>ID: <?= $model->id ?></li>
				<li>Theme: Portfolio</li>
				<li>Status: Demo</li>
			</ul>
		</div>
	</div>

	<?php if (!empty($related)): ?>
		<h3 class="my-4">Related Projects</h3>
		<div class="row">
			<?php foreach ($related as $r): ?>
				<div class="col-md-3 col-sm-6 mb-4">
					<?= Html::a(
						Html::img(
							'https://picsum.photos/seed/' . $r->id . '/500/300',
							['class' => 'img-fluid']
						),
						[$r->viewUrl]
					) ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

</div>
<!-- /.container -->

<body id="page-top">
	<!-- Navigation-->
	<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>

	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
			<li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
			<li class="sidebar-nav-item"><a href="#about">About</a></li>
			<li class="sidebar-nav-item"><a href="#services">Services</a></li>
			<li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
			<li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
		</ul>
	</nav>

	<!-- Header-->
	<header class="masthead d-flex align-items-center">
		<div class="container px-4 px-lg-5 text-center">
			<h1 class="mb-1">Stylish Portfolio</h1>
			<h3 class="mb-5"><em>A Free Bootstrap Theme by Start Bootstrap</em></h3>
			<a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
		</div>
	</header>

	<!-- About-->
	<section class="content-section bg-light" id="about">
		<div class="container px-4 px-lg-5 text-center">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-lg-10">
					<h2>Stylish Portfolio is the perfect theme for your next project!</h2>
					<p class="lead mb-5">
						This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
						<a href="https://unsplash.com/">Unsplash</a>
						!
					</p>
					<a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Services-->
	<section class="content-section bg-primary text-white text-center" id="services">
		<div class="container px-4 px-lg-5">
			<div class="content-section-heading">
				<h3 class="text-secondary mb-0">Services</h3>
				<h2 class="mb-5">What We Offer</h2>
			</div>
			<div class="row gx-4 gx-lg-5">
				<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
					<span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
					<h4><strong>Responsive</strong></h4>
					<p class="text-faded mb-0">Looks great on any screen size!</p>
				</div>
				<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
					<span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
					<h4><strong>Redesigned</strong></h4>
					<p class="text-faded mb-0">Freshly redesigned for Bootstrap 5.</p>
				</div>
				<div class="col-lg-3 col-md-6 mb-5 mb-md-0">
					<span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
					<h4><strong>Favorited</strong></h4>
					<p class="text-faded mb-0">
						Millions of users
						<i class="fas fa-heart"></i>
						Start Bootstrap!
					</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
					<h4><strong>Question</strong></h4>
					<p class="text-faded mb-0">I mustache you a question...</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Callout-->
	<section class="callout">
		<div class="container px-4 px-lg-5 text-center">
			<h2 class="mx-auto mb-5">
				Welcome to
				<em>your</em>
				next website!
			</h2>
			<a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a>
		</div>
	</section>

	<!-- Portfolio-->
	<section class="content-section" id="portfolio">
		<div class="container px-4 px-lg-5">
			<div class="content-section-heading text-center">
				<h3 class="text-secondary mb-0">Portfolio</h3>
				<h2 class="mb-5">Recent Projects</h2>
			</div>
			<div class="row gx-0">
				<div class="col-lg-6">
					<a class="portfolio-item" href="#!">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">Stationary</div>
								<p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
							</div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="...">
					</a>
				</div>
				<div class="col-lg-6">
					<a class="portfolio-item" href="#!">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">Ice Cream</div>
								<p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
							</div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="...">
					</a>
				</div>
				<div class="col-lg-6">
					<a class="portfolio-item" href="#!">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">Strawberries</div>
								<p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
							</div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="...">
					</a>
				</div>
				<div class="col-lg-6">
					<a class="portfolio-item" href="#!">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">Workspace</div>
								<p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
							</div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="...">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Call to Action-->
	<section class="content-section bg-primary text-white">
		<div class="container px-4 px-lg-5 text-center">
			<h2 class="mb-4">The buttons below are impossible to resist...</h2>
			<a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
			<a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
		</div>
	</section>

	<!-- Map-->
	<div class="map" id="contact">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
		<br />
		<small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
	</div>

	<!-- Footer-->
	<footer class="footer text-center">
		<div class="container px-4 px-lg-5">
			<ul class="list-inline mb-5">
				<li class="list-inline-item">
					<a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
				</li>
				<li class="list-inline-item">
					<a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
				</li>
				<li class="list-inline-item">
					<a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
				</li>
			</ul>
			<p class="text-muted small mb-0">Copyright &copy; Your Website 2021</p>
		</div>
	</footer>

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<!-- Core theme JS-->
	<script src="assets/js/scripts.js"></script>
</body>
