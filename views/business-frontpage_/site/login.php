<?php
/**
 * login.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

$this->title = 'Login';
?>
<div class="container">

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2><?= Html::encode($this->title) ?></h2>

			<div class="panel panel-primary">
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

					<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

					<?= $form->field($model, 'password')->passwordInput() ?>

					<?= $form->field($model, 'rememberMe')->checkbox() ?>

					<div style="color:#999;margin:1em 0">
						If you forgot your password you can
						<?= Html::a('reset it', ['site/request-password-reset']) ?>.
					</div>

					<div class="form-group">
						<?= Html::submitButton('Login', [
							'class' => 'btn btn-primary', 'name' => 'login-button'
						]) ?>
					</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>

			<p class="text-center">- OR -</p>

			<div class="col-sm-6">
				<?= BSocial::b('github')->caption('Login using @@@') ?>
				<?= BSocial::b('google')->caption('Login using @@@') ?>
			</div>
			<div class="col-sm-6">
				<?= BSocial::b('twitter')->caption('Login using @@@') ?>
				<?= BSocial::b('facebook')->caption('Login using @@@') ?>
			</div>
		</div>
	</div>

	<hr>

	<?= $this->render('_footer.php') ?>
</div>
