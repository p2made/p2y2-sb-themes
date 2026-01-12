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

$this->title = 'Home';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/stylish-portfolio'
);
?>

<?= $this->render('_header.php') ?>
<?= $this->render('_about.php') ?>
<?= $this->render('_services.php') ?>

<!-- Callout -->
<aside class="callout">
	<div class="text-vertical-center">
		<h1>Vertically Centered Text</h1>
	</div>
</aside>

<?= $this->render('_portfolio.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_call-to-action.php') ?>
<?= $this->render('_contact.php') ?>
<?= $this->render('_footer.php') ?>
