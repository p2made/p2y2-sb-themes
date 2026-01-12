<?php
/**
 * requestPasswordResetToken.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
?>

	<!-- Every page had one or more boxes each enclosed in a row -->
	<!-- This page has one box -->

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				<?= Html::encode($this->title) ?>
			</h2>
			<hr>
		</div>
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					Please choose your new password:
				</div>
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

					<?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

					<div class="form-group">
						<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
					</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
