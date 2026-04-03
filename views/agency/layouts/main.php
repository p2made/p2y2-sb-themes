<?php
/**
 * @p2m/th/views/agency/layouts/main.php
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

use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

use yii\bootstrap5\Html;
use p2m\th\assets\P2AgencyAsset;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head') ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
	<?= $this->render('_navbar') ?>
	<?= $content ?>
	<?= $this->render('_footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
