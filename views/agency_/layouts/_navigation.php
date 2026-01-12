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
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$linkOptions = ['class' => 'page-scroll'];
$dropOptions = ['class' => 'navbar-inverse'];
$menuItems = [
	['label' => '', 'url' =>'#page-top', 'options' => ['class' => 'hidden']],
	['label' => 'Services', 'url' =>'#services', 'linkOptions' => $linkOptions],
	['label' => 'Portfolio', 'url' =>'#portfolio', 'linkOptions' => $linkOptions],
	['label' => 'About', 'url' =>'#about', 'linkOptions' => $linkOptions],
	['label' => 'Team', 'url' =>'#team', 'linkOptions' => $linkOptions],
	['label' => 'Contact', 'url' =>'#contact', 'linkOptions' => $linkOptions],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'linkOptions' => $linkOptions, 'items' => [
		['label' => 'Login', 'url' => ['/site/login'], 'options' => $dropOptions],
		['label' => 'Signup', 'url' => ['/site/signup'], 'options' => $dropOptions],
	]];
} else {
	$menuItems[] = '<li>'
		. Html::beginForm(['/site/logout'], 'post')
		. Html::submitButton(
			'Logout (' . Yii::$app->user->identity->username . ')',
			['class' => 'btn btn-link logout']
		)
		. Html::endForm()
		. '</li>';
}
?>
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <?= FA::icon('bars') ?>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">P2 Agency</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
?>
		</div>
	</div>
</nav>
