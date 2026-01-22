<?php
/**
 * @p2m/sb/views/portfolio/layouts/main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

/** @var \yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Html;

use p2m\sb\assets\P2PortfolioDemoAsset;

$this->params['p2mThemeAssetUrl'] = P2PortfolioDemoAsset::register($this)->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head') ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
	<main class="flex-shrink-0">
		<?= $this->render('_navbar') ?>
		<?= $content ?>
	</main>
	<?= $this->render('_footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
