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

NavBar::begin([
	'brandLabel' => 'P2 Modern Business',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
$menuItems = [
	['label' => 'About', 'url' => ['/site/about']],
	['label' => 'Services', 'url' =>['/site/page', 'view' => 'services']],
	['label' => 'Contact', 'url' => ['/site/contact']],
	['label' => 'Portfolio', 'url' =>'#', 'items' => [
		['label' => '1 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-1-col']],
		['label' => '2 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-2-col']],
		['label' => '3 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-3-col']],
		['label' => '4 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-4-col']],
		['label' => 'Single Portfolio Item', 'url' =>['/site/page', 'view' => 'portfolio-item']],
	]],
	['label' => 'Blog', 'url' =>'#', 'items' => [
		['label' => 'Blog Home 1', 'url' =>['/site/page', 'view' => 'blog-home-1']],
		['label' => 'Blog Home 2', 'url' =>['/site/page', 'view' => 'blog-home-2']],
		['label' => 'Blog Post', 'url' =>['/site/page', 'view' => 'blog-post']],
	]],
	['label' => 'Other Pages', 'url' =>'#', 'items' => [
		['label' => 'Full Width Page', 'url' =>['/site/page', 'view' => 'full-width']],
		['label' => 'Sidebar Page', 'url' =>['/site/page', 'view' => 'sidebar']],
		['label' => 'FAQ', 'url' =>['/site/page', 'view' => 'faq']],
		['label' => 'Pricing Table', 'url' =>['/site/page', 'view' => 'pricing']],
		['label' => '404', 'url' =>['/site/page', 'view' => '404']],
	]],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'items' => [
		['label' => 'Signup', 'url' => ['/site/signup']],
		['label' => 'Login', 'url' => ['/site/login']],
	]];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
