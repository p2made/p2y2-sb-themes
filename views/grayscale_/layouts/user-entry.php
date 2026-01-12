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
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<?php $this->beginBody() ?>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">Menu <i class="fa fa-bars"></i></button>
				<a class="navbar-brand page-scroll" href="<?= Yii::$app->homeUrl ?>">
					<i class="fa fa-play-circle"></i> <span class="light">P2</span> Grayscale
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<?php
					echo Nav::widget([
						'options' => ['class' => 'nav navbar-nav'],
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
