<?php
/**
 * portfolio-item.php
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

$this->title = 'Portfolio Item';
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

	<!-- Portfolio Item Row -->
	<div class="row">

		<div class="col-md-8">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="http://placehold.it/750x500" alt="" class="img-responsive">
					</div>
					<div class="item">
						<img src="http://placehold.it/750x500" alt="" class="img-responsive">
					</div>
					<div class="item">
						<img src="http://placehold.it/750x500" alt="" class="img-responsive">
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>

		<div class="col-md-4">
			<h3>Project Description</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
			<h3>Project Details</h3>
			<ul>
				<li>Lorem Ipsum</li>
				<li>Dolor Sit Amet</li>
				<li>Consectetur</li>
				<li>Adipiscing Elit</li>
			</ul>
		</div>

	</div>
	<!-- /.row -->

	<!-- Related Projects Row -->
	<div class="row">

		<div class="col-lg-12">
			<h3 class="page-header">Related Projects</h3>
		</div>

		<div class="col-sm-3 col-xs-6">
			<a href="#">
				<img src="http://placehold.it/500x300" alt="" class="img-responsive img-hover img-related">
			</a>
		</div>

		<div class="col-sm-3 col-xs-6">
			<a href="#">
				<img src="http://placehold.it/500x300" alt="" class="img-responsive img-hover img-related">
			</a>
		</div>

		<div class="col-sm-3 col-xs-6">
			<a href="#">
				<img src="http://placehold.it/500x300" alt="" class="img-responsive img-hover img-related">
			</a>
		</div>

		<div class="col-sm-3 col-xs-6">
			<a href="#">
				<img src="http://placehold.it/500x300" alt="" class="img-responsive img-hover img-related">
			</a>
		</div>

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
