<?php
/**
 * @p2m/sb/views/portfolio/layouts/stylish-portfolio.php
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

use p2m\sb\assets\P2StylishPortfolioAsset;

//$this->params['themeAssetUrl'] = P2StylishPortfolioAsset::register($this)->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head') ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
	<?= $this->render('_stylish-nav') ?>
	<?= $content ?>
	<?= $this->render('_stylish-footer') ?>
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
