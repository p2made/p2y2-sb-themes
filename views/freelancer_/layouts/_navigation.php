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
	['label' => 'Services', 'url' =>'#services', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Portfolio', 'url' =>'#portfolio', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'About', 'url' =>'#about', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Team', 'url' =>'#team', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Contact', 'url' =>'#contact', 'linkOptions' => ['class' => 'page-scroll']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'linkOptions' => $linkOptions, 'items' => [
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

NavBar::begin([
	'brandLabel' => 'P2 Freelancer',
	'brandUrl' => '#page-top',
	'brandOptions'=>[
		'class'=>'page-scroll'
	],
	'options' => [
		'class' => 'navbar navbar-default navbar-custom navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
