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

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];
?>

<div class="container">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?></h1>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
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

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
