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
use yii\captcha\Captcha;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

$this->title = 'Contact';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>

	<!-- Every page had one or more boxes each enclosed in a row -->
	<!-- This page has two boxes -->

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">Contact
					<strong>business casual</strong>
				</h2>
				<hr>
			</div>
			<div class="col-md-8">
				<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
				<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.6428629258003!2d152.95725205121929!3d-26.627891987717703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9378fc4e5d3fdb%3A0x4811b4058d2920d4!2sCurrie+St%2C+Nambour+QLD+4560!5e0!3m2!1sen!2sau!4v1487146302624"></iframe>
			</div>
			<div class="col-md-4">
				<p>Phone:
					<strong>+61.7.4567.4321</strong>
				</p>
				<p>Email:
					<strong><a href="mailto:name@example.com">name@example.com</a></strong>
				</p>
				<p>Address:
					<strong>
						Currie Street<br>Nambour, Qld 4560, AU
					</strong>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
					<strong>form</strong>
				</h2>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
				<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
					<div class="row">
						<div class="form-group col-lg-4">
							<?= $form->field($model, 'name')->textInput([
								'autofocus' => true
							]) ?>
						</div>
						<div class="form-group col-lg-4">
							<?= $form->field($model, 'email') ?>
						</div>
						<div class="form-group col-lg-4">
							<?= $form->field($model, 'subject') ?>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
						</div>
						<div class="form-group col-lg-12">
							<?= Html::submitButton('Send Message', [
								'class' => 'btn btn-primary', 'name' => 'contact-button'
							]) ?>
						</div>
					</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
