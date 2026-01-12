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
use p2m\helpers\FA;

/* @var $this \yii\web\View */
/* @var $content string */

$loginItem = ['label' => 'Login', 'url' => ['/site/login']];
$signupItem = ['label' => 'Signup', 'url' => ['/site/signup']];
$menuItems = [
	'<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">' . FA::i('times') . '</a>',
	'<li class="sidebar-brand"><a href="' . Yii::$app->homeUrl . '">Stylish Portfolio</a></li>',
	'<li><a href="' . Yii::$app->homeUrl . '">Home</a></li>',
];
if (Yii::$app->controller->action->id === 'login') {
	$menuItems[] = $signupItem;
} else {
	$menuItems[] = $loginItem;
}
if (Yii::$app->controller->action->id === 'error') {
	$menuItems[] = $signupItem;
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php') ?>
</head>
<body>
	<?php $this->beginBody() ?>

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

	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
