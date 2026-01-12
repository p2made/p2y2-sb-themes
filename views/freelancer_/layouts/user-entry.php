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
<body>
	<?php $this->beginBody() ?>

	<?php
		NavBar::begin([
			'brandLabel' => 'P2 Freelancer',
			'brandUrl' => Yii::$app->homeUrl,
			'brandOptions'=>[
				'class'=>'page-scroll'
			],
			'options' => [
				'class' => 'navbar navbar-default navbar-custom navbar-fixed-top',
			],
		]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $menuItems,
		]);
		NavBar::end();
	?>

	<?= $content ?>

	<?= $this->render('_footer.php') ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
