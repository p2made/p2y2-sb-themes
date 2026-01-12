<?php
/**
 * signup.php
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

$this->title = 'Signup';

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-user form-control-feedback'></i>",
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions3 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];
?>

<div class="container">

	<hr class="featurette-divider">

	<!-- Signup row -->
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3><?= Html::encode($this->title) ?>
						<small>to use this awesome site</small>
					</h3>
				</div>
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

			<p class="text-center">- OR -</p>

		</div>

		<div class="col-lg-3 col-lg-offset-3">
			<?= BSocial::b('github')->caption('Signup using @@@') ?>
			<?= BSocial::b('google')->caption('Signup using @@@') ?>
		</div>
		<div class="col-lg-3">
			<?= BSocial::b('twitter')->caption('Signup using @@@') ?>
			<?= BSocial::b('facebook')->caption('Signup using @@@') ?>
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
