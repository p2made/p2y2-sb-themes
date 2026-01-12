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

$loginItem = ['label' => 'Login', 'url' => ['/site/login']];
$signupItem = ['label' => 'Signup', 'url' => ['/site/signup']];

$menuItems = [];
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
<body id="page-top">
	<?php $this->beginBody() ?>

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="<?= Yii::$app->homeUrl ?>">P2 Creative</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
					echo Nav::widget([
						'options' => ['class' => 'navbar-nav navbar-right'],
						'items' => $menuItems,
					]);
				?>
			</div>
		</div>
	</nav>

	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
