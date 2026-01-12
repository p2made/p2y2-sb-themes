<?php
/**
 * contact.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\captcha\Captcha;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<!-- Content Row -->
	<div class="row">
		<!-- Map Column -->
		<div class="col-md-8">
			<!-- Embedded Google Map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28533.269972547114!2d152.9401274584943!3d-26.627383058808157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9378fdc664a213%3A0x502a35af3deac60!2sNambour+QLD+4560!5e0!3m2!1sen!2sau!4v1487055781426" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<!-- Contact Details Column -->
		<div class="col-md-4">
			<h3>Contact Details</h3>
			<p>
				Somewhere In<br>Nambour, Qld 4560, Australia<br>
			</p>
			<p><i class="fa fa-phone"></i>
				<abbr title="Phone">P</abbr>: +61 7 4567-7890</p>
			<p><i class="fa fa-envelope-o"></i>
				<abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
			</p>
			<p><i class="fa fa-clock-o"></i>
				<abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
			<ul class="list-unstyled list-inline list-social-icons">
				<li><?= BSocial::bi('github') ?></li>
				<li><?= BSocial::bi('twitter') ?></li>
				<li><?= BSocial::bi('google') ?></li>
				<li><?= BSocial::bi('facebook') ?></li>
				<li><?= BSocial::bi('linkedin') ?></li>
			</ul>
		</div>
	</div>
	<!-- /.row -->

	<!-- Contact Form -->
	<div class="row">
		<div class="col-md-8">
			<h3>Send us a Message</h3>
			<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
				<div class="control-group form-group">
					<div class="controls">
						<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<?= $form->field($model, 'email') ?>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<?= $form->field($model, 'subject') ?>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
						]) ?>
					</div>
				</div>
				<div id="success"></div>
				<!-- For success/fail messages -->
				<div class="form-group">
					<?= Html::submitButton('Send Message', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>

	</div>
	<!-- /.row -->

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
