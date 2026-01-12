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

$this->title = 'P2 One Page Wonder';
?>

<!-- Full Width Image Header -->
<header class="header-image">
	<div class="headline">
		<div class="container">
			<h1><?= Html::encode($this->title) ?></h1>
			<h2>Will Knock Your Socks Off</h2>
		</div>
	</div>
</header>

<!-- Page Content -->
<div class="container">

	<hr class="featurette-divider">

	<?= $this->render('_featurette-1.php') ?>

	<hr class="featurette-divider">

	<?= $this->render('_featurette-2.php') ?>

	<hr class="featurette-divider">

	<?= $this->render('_featurette-3.php') ?>

	<hr class="featurette-divider">

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
<!-- /.container -->
