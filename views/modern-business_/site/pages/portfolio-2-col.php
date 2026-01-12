<?php
/**
 * portfolio-2-col.php
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

$this->title = 'Two Column Portfolio';
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

	<!-- Projects Row -->
	<div class="row">
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project One</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project Two</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
	</div>
	<!-- /.row -->

	<!-- Projects Row -->
	<div class="row">
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project Three</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project Four</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
	</div>
	<!-- /.row -->

	<!-- Projects Row -->
	<div class="row">
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project Five</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
		<div class="col-md-6 img-portfolio">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x400" alt="" class="img-responsive img-hover">
			</a>
			<h3>
				<a href="portfolio-item.html">Project Six</a>
			</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Pagination -->
	<div class="row text-center">
		<div class="col-lg-12">
			<ul class="pagination">
				<li>
					<a href="#">&laquo;</a>
				</li>
				<li class="active">
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">&raquo;</a>
				</li>
			</ul>
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
