<?php
/**
 * resetPassword.php
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
<header>
	<div class="container">
		<div class="intro-text">
			<h1>
				<?= Html::encode($this->title) ?>
			</h1>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="panel text-info text-left">
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
	</div>
</header>
<?= $this->render('_footer.php') ?>
