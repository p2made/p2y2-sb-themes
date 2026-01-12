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
<header>
	<div class="header-content">
		<div class="header-content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="intro-text text-center">
							<?= Html::encode($this->title) ?>
						</h2>
					</div>
					<div class="col-lg-6 col-lg-offset-3">
						<div class="panel text-primary text-left">
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
			</div>
		</div>
	</div>
</header>
<?= $this->render('_footer.php') ?>
