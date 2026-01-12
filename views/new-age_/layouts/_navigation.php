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

NavBar::begin([
	'brandLabel' => 'P2 New Age',
	'brandUrl' => '#page-top',
	'options' => [
		'class' => 'navbar navbar-default navbar-fixed-top',
	],
	'brandOptions' => [
		'class' => 'navbar-brand page-scroll',
	],
]);
$menuItems = [
	['label' => 'Download', 'url' =>'#download', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Features', 'url' =>'#features', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Contact', 'url' =>'#contact', 'linkOptions' => ['class' => 'page-scroll']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'linkOptions' => ['class' => 'page-scroll'], 'items' => [
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
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
