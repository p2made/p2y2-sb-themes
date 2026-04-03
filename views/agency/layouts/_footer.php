<?php
/**
 * @p2m/th/views/agency/layouts/_footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 */

use yii\bootstrap5\Html;
use yii\helpers\Url;
use p2m\helpers\BI;
use p2m\helpers\Copyright;

/** @var yii\web\View $this */

$privacyLabel = Yii::t('p2m.th.agency', 'Privacy Policy');
$termsLabel   = Yii::t('p2m.th.agency', 'Terms of Use');

// These are placeholders; consumers can change routes later.
// If you want them to live in the theme controller, you can point them at ['/site/privacy'] etc.
$privacyUrl = Url::to(['/site/privacy']);
$termsUrl   = Url::to(['/site/terms']);
?>
<!-- Footer-->
<footer class="footer py-4">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 text-lg-start">
				<?= Copyright::c() ?>
			</div>
			<div class="col-lg-4 my-3 my-lg-0">
				<?= Html::a(
					BI::i(BI::_FACEBOOK)->size(5),
					'#!',
					[
						'class' => 'btn btn-dark btn-social mx-2',
						'aria-label' => 'Facebook',
					]
				) ?>
				<?= Html::a(
					BI::i(BI::_LINKEDIN)->size(5),
					'#!',
					[
						'class' => 'btn btn-dark btn-social mx-2',
						'aria-label' => 'LinkedIn',
					]
				) ?>
				<?= Html::a(
					BI::i(BI::_GITHUB)->size(5),
					'#!',
					[
						'class' => 'btn btn-dark btn-social mx-2',
						'aria-label' => 'GitHub',
					]
				) ?>
			</div>
			<div class="col-lg-4 text-lg-ends">
				<?= Html::a(
					Html::encode($privacyLabel),
					['#!'],
					//$privacyUrl,
					[
						'class' => 'link-dark text-decoration-none me-3',
						'aria-label' => $privacyLabel,
					]
				) ?>
				<?= Html::a(
					Html::encode($termsLabel),
					['#!'],
					//$termsUrl,
					[
						'class' => 'link-dark text-decoration-none',
						'aria-label' => $termsLabel,
					]
				) ?>
			</div>
		</div>
	</div>
</footer>
