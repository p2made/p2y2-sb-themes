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

$menuItems = [
	['label' => 'About', 'url' =>'#'],
	['label' => 'Services', 'url' =>'#'],
	['label' => 'Contact', 'url' =>'#'],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'linkOptions' => ['class' => 'page-scroll'], 'items' => [
		['label' => 'Login', 'url' => ['/site/login']],
		['label' => 'Signup', 'url' => ['/site/signup']],
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

NavBar::begin([
	'brandLabel' => 'P2 Business Frontpage',
	'brandUrl' => '#',
	'brandOptions'=>[
		'class'=>'page-scroll'
	],
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();
