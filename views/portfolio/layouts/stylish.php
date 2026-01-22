<?php
/**
 * @p2m/sb/views/portfolio/layouts/stylish.php
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
use p2m\helpers\BI;
use p2m\sb\assets\P2StylishPortfolioAsset;

// Register using the View instance ($this), then store into $this->view->params
//$bundle = P2StylishPortfolioAsset::register($this);
//$this->view->params['themeAssetUrl'] = $bundle->baseUrl;
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
	<?= Html::a(
		BI::i(BI::_ARROW_UP)->size(2),
		'#page-top',
		['class' => 'scroll-to-top rounded']
	) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
