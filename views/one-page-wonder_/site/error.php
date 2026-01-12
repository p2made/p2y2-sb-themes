<?php
/**
 * error.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="container site-error">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">

		<div class="col-lg-12">
			<div class="jumbotron">
				<div class="alert alert-danger text-left">
					<?= nl2br(Html::encode($message)) ?>
				</div>
				<h1 class="text-center danger">
					<?= FA::i('ban')->size(FA::SIZE_5X) ?><br>
					Nothing to See Here
				</h1>
			</div>
		</div>

	</div>

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
