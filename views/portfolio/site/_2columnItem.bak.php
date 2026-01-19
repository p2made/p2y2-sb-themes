<?php
/**
 * @p2m/sb/views/portfolio/site/_2columnItem.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

/** @var \p2m\sb\models\PortfolioItem $model */

use yii\bootstrap5\Html;

$img = 'https://picsum.photos/seed/' . $model->id . '/700/400';
?>
<div class="col-lg-6 mb-4">
	<div class="card h-100">
		<?= Html::a(
			Html::img($img, ['class' => 'card-img-top', 'alt' => '']),
			$model->viewUrl ?? '#'
		) ?>

		<div class="card-body">
			<h4 class="card-title">
				<?= Html::a(Html::encode($model->title), $model->viewUrl ?? '#') ?>
			</h4>

			<p class="card-text"><?= Html::encode($model->summary) ?></p>
		</div>
	</div>
</div>
