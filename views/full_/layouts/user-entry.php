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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="full">
<head>
	<?= $this->render('_head.php', []) ?>
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

		echo Nav::widget([
			'options' => ['class' => 'nav navbar-nav'],
			'items' => $menuItems,
		]);
		NavBar::end();
	?>

	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
