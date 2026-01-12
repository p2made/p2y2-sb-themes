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

$menuItems = [['label' => 'Home', 'url' => Yii::$app->homeUrl]];
if (Yii::$app->controller->action->id === 'login') {
	$menuItems[] = $signupItem;
} else {
	$menuItems[] = $loginItem;
}
if (Yii::$app->controller->action->id === 'error') {
	$menuItems[] = $signupItem;
}
?>

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php') ?>
</head>
<body>
	<?php $this->beginBody() ?>

	<?= $this->render('_header.php') ?>

	<?php
		NavBar::begin([
			'brandLabel' => 'P2 Modern Business',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar navbar-default',
			],
		]);
		echo Nav::widget([
			'options' => ['class' => 'nav navbar-nav'],
			'items' => $menuItems,
		]);
		NavBar::end();
	?>

	<div class="container">
		<?= $content ?>
	</div>

	<?= $this->render('_footer.php') ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
