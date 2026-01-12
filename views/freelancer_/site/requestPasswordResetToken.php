<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>
					<?= Html::encode($this->title) ?>
				</h1>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<div class="panel text-primary text-left">
					<div class="panel-heading">
						<p>Please fill out your email. A link to reset password will be sent there.</p>
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
	</div>
</header>
