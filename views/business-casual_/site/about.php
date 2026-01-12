<?php
/**
 * about.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2m\helpers\FA;

$this->title = 'About';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>

	<!-- Every page had one or more boxes each enclosed in a row -->
	<!-- This page has two boxes -->

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
					<strong>business casual</strong>
				</h2>
				<hr>
			</div>
			<div class="col-md-6">
				<img src="<?= $assetDir ?>/img/slide-2.jpg" alt="" class="img-responsive img-border-left">
			</div>
			<div class="col-md-6">
				<p>This is a great place to introduce your company or project and describe what you do.</p>
				<p>This Yii2 implementation of Modern Business is crafted with
					<?= FA::icon('heart') ?> by Pedro fp, on the
					<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
						Sunshine Coast <?= FA::icon(FA::_EXTERNAL_LINK) ?>
					</a>
				of Queensland Australia.</p>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">Our
					<strong>Team</strong>
				</h2>
				<hr>
			</div>
			<div class="col-sm-4 text-center">
				<img src="http://placehold.it/750x450" alt="" class="img-responsive">
				<h3>John Smith
					<small>Job Title</small>
				</h3>
			</div>
			<div class="col-sm-4 text-center">
				<img src="http://placehold.it/750x450" alt="" class="img-responsive">
				<h3>John Smith
					<small>Job Title</small>
				</h3>
			</div>
			<div class="col-sm-4 text-center">
				<img src="http://placehold.it/750x450" alt="" class="img-responsive">
				<h3>John Smith
					<small>Job Title</small>
				</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
