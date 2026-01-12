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

$this->title = 'P2 New Age';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/new-age'
);
?>
<?= $this->render('_header.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_download.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_features.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_cta.php') ?>
<?= $this->render('_contact.php') ?>
<?= $this->render('_footer.php') ?>
