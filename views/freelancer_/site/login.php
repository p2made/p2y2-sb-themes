<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Header -->
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
						<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

						<?= $form->field($model, 'username')->textInput([
							'autofocus' => true
						]) ?>

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
			</div>
		</div>
	</div>
</header>
