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

use yii\bootstrap\Nav;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$onclick = ' onclick=$("#menu-close").click();';
$menuItems = [
	'<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">' . FA::i('times') . '</a>',
	'<li class="sidebar-brand"><a href="#top"' . $onclick . '>Stylish Portfolio</a></li>',
	'<li><a href="#top"' . $onclick . '>Home</a></li>',
	'<li><a href="#about"' . $onclick . '>About</a></li>',
	'<li><a href="#services"' . $onclick . '>Services</a></li>',
	'<li><a href="#portfolio"' . $onclick . '>Portfolio</a></li>',
	'<li><a href="#contact"' . $onclick . '>Contact</a></li>',
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}
?>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
	<?php
		echo Nav::widget([
			'options' => ['class' => 'sidebar-nav'],
			'items' => $menuItems,
		]);
	?>
</nav>
