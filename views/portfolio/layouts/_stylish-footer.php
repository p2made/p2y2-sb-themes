<?php
/**
 * @p2m/th/views/portfolio/layouts/_stylish-footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

use yii\bootstrap5\Html;
use p2m\helpers\BI;
use p2m\helpers\Copyright;

/** @var yii\web\View $this */
?>
<!-- Footer-->
<footer class="footer text-center">
	<div class="container px-4 px-lg-5">
		<ul class="list-inline mb-5">
			<li class="list-inline-item">
				<?= Html::a(
					BI::i(BI::_FACEBOOK)->size(1),
					'#!',
					[
						'class' => 'social-link rounded-circle text-white me-3';
						'aria-label' => 'Facebook',
					]
				) ?>
			</li>
			<li class="list-inline-item">
				<?= Html::a(
					BI::i(BI::_TWITTER)->size(1),
					'#!',
					[
						'class' => 'social-link rounded-circle text-white me-3';
						'aria-label' => 'Twitter',
					]
				) ?>
			</li>
			<li class="list-inline-item">
				<?= Html::a(
					BI::i(BI::_GITHUB)->size(1),
					'#!',
					[
						'class' => 'social-link rounded-circle text-white me-3';
						'aria-label' => 'GitHub',
					]
				) ?>
			</li>
		</ul>

		<?= Copyright::c() ?>
	</div>
</footer>
