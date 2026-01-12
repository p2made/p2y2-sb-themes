<?php
/**
 * _navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$menuItems = [
	['label' => '', 'url' =>'#page-top', 'options' => ['class' => 'hidden']],
	['label' => 'About', 'url' =>'#about', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Download', 'url' =>'#download', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Contact', 'url' =>'#contact', 'linkOptions' => ['class' => 'page-scroll']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'items' => [
		['label' => 'Login', 'url' => ['/site/login']],
		['label' => 'Signup', 'url' => ['/site/signup']],
	]];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}
?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">
				<i class="fa fa-play-circle"></i> <span class="light">P2</span> Grayscale
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
<?php
	echo Nav::widget([
		'options' => ['class' => 'nav navbar-nav'],
		'items' => $menuItems,
	]);
?>
		</div>
	</div>
</nav>
