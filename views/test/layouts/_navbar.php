<?php
/**
 * @p2m/th/views/agency/layouts/_navbar.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 */
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;
use p2m\helpers\BI;

/** @var yii\web\View $this */
/** @var string|null  $title */

$menuIcon = (string) BI::i(BI::_LIST)->size(2);
?>
<!-- Navigation-->
<header>
	<?php
	NavBar::begin([
		'brandLabel' => Yii::$app->name,
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
		],
	]);
	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
	];

	echo Nav::widget([
		'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
		'items' => $menuItems,
	]);
	NavBar::end();
	?>
</header>
