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

$this->title = 'Home';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/freelancer'
);
?>

<?= $this->render('_header.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_portfolio.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_about.php') ?>
<?= $this->render('_contact.php') ?>
