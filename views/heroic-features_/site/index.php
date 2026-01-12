<?php
/**
 * index.php
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

$this->title = 'Home';
?>
<div class="container">
	<?= $this->render('_header.php') ?>

	<hr>

	<!-- Title -->
	<div class="row">
		<div class="col-lg-12">
			<h3>Latest Features</h3>
		</div>
	</div>
	<!-- /.row -->

	<!-- Page Features -->
	<div class="row text-center">

		<?= $this->render('_feature.php') ?>
		<?= $this->render('_feature.php') ?>
		<?= $this->render('_feature.php') ?>
		<?= $this->render('_feature.php') ?>

	</div>
	<!-- /.row -->

	<hr>

	<?= $this->render('_footer.php') ?>
</div>
