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
<header id="top" class="header">
	<div class="text-vertical-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h3>
						<?= Html::encode($this->title) ?>
					</h3>
					<div class="panel text-primary text-left">
						<div class="panel-heading">
							Please fill out your email. A link to reset password will be sent there.
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
	</div>
</header>
<?= $this->render('_footer.php') ?>
