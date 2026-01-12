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

$menuItems = [
	['label' => '', 'url' =>'#page-top', 'options' => ['class' => 'hidden']],
	['label' => 'About', 'url' => '#'],
	['label' => 'Services', 'url' => '#'],
	['label' => 'Contact', 'url' => '#'],
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

NavBar::begin([
	'brandLabel' => 'P2 Full',
	'brandUrl' => '#',
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();
