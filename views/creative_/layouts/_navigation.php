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
	['label' => 'About', 'url' => '#about'],
	['label' => 'Services', 'url' => '#services'],
	['label' => 'Portfolio', 'url' => '#portfolio'],
	['label' => 'Contact', 'url' => '#contact'],
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

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">P2 Creative</a>
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
