<?php
/**
 * @p2m/th/views/modern-business/layouts/main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-themes
 * @license MIT
 */

/** @var \yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Html;

use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

use p2m\th\assets\P2ModernBusinessAsset;

$this->params['themeAssetUrl'] = P2ModernBusinessAsset::register($this)->baseUrl;

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
