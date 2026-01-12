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
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
?>
<div class="container">

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2><?= Html::encode($this->title) ?></h2>

			<div class="panel panel-primary">
				<div class="panel-heading">
					Please fill out your email. A link to reset password will be sent there.
				</div>
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

					<?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

					<div class="form-group">
						<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
					</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<?= $this->render('_footer.php') ?>
</div>
