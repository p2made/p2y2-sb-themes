<?php
/**
 * user-entry.php
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

/* @var $this \yii\web\View */
/* @var $content string */

p2m\SB\assets\ModernBusinessAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_header.php', []) ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
NavBar::begin([
	'brandLabel' => 'P2 Modern Business',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);

$menuItems = [];
if (Yii::$app->controller->action->id === 'signup') {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
	$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}

echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
