<?php
/**
 * @p2m/th/views/test/layouts/main.php
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

/** @var \yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;

use p2m\th\assets\P2TestAsset;
$this->params['themeAssetUrl'] = P2TestAsset::register($this)->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('_head') ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
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

<main role="main" class="flex-shrink-0">
	<div class="container">
		<?= $content ?>
	</div>
</main>

	<?= $this->render('_footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
