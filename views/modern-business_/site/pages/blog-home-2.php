<?php
/**
 * blog-home-2.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = 'Blog Home Two';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<!-- Blog Post Row -->
	<div class="row">
		<div class="col-md-1 text-center">
			<p><i class="fa fa-camera fa-4x"></i>
			</p>
			<p>June 17, 2014</p>
		</div>
		<div class="col-md-5">
			<a href="blog-post.html">
				<img src="http://placehold.it/600x300" alt="" class="img-responsive img-hover">
			</a>
		</div>
		<div class="col-md-6">
			<h3>
				<a href="blog-post.html">Blog Post Title</a>
			</h3>
			<p>by <a href="#">Start Bootstrap</a>
			</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Blog Post Row -->
	<div class="row">
		<div class="col-md-1 text-center">
			<p><i class="fa fa-film fa-4x"></i>
			</p>
			<p>June 17, 2014</p>
		</div>
		<div class="col-md-5">
			<a href="blog-post.html">
				<img src="http://placehold.it/600x300" alt="" class="img-responsive img-hover">
			</a>
		</div>
		<div class="col-md-6">
			<h3><a href="blog-post.html">Blog Post Title</a>
			</h3>
			<p>by <a href="#">Start Bootstrap</a>
			</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Blog Post Row -->
	<div class="row">
		<div class="col-md-1 text-center">
			<p><i class="fa fa-file-text fa-4x"></i>
			</p>
			<p>June 17, 2014</p>
		</div>
		<div class="col-md-5">
			<a href="blog-post.html">
				<img src="http://placehold.it/600x300" alt="" class="img-responsive img-hover">
			</a>
		</div>
		<div class="col-md-6">
			<h3><a href="blog-post.html">Blog Post Title</a>
			</h3>
			<p>by <a href="#">Start Bootstrap</a>
			</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Pager -->
	<div class="row">
		<ul class="pager">
			<li class="previous"><a href="#">&larr; Older</a>
			</li>
			<li class="next"><a href="#">Newer &rarr;</a>
			</li>
		</ul>
	</div>
	<!-- /.row -->

	<?= $this->render('../_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
