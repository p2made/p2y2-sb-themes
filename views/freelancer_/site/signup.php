<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
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
					<div class="panel-body">
						<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

							<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

							<?= $form->field($model, 'email') ?>

							<?= $form->field($model, 'password')->passwordInput() ?>

							<div class="form-group">
								<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
							</div>

						<?php ActiveForm::end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
