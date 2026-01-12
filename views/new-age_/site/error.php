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
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
				</h2>
				<hr>
			</div>
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
	</div>
</header>
<?= $this->render('_footer.php') ?>
