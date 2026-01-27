<?php
/**
 * @p2m/th/views/portfolio/site/_1columnItem.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 */

/** @var \p2m\th\models\PortfolioItem $model */

use yii\bootstrap5\Html;

/** @var p2m\th\models\PortfolioItem $model */
?>

<div class="row mb-4">
	<div class="col-md-7">
		<?= Html::a(
			$model->image->o([
				'class' => 'img-fluid rounded mb-3 mb-md-0',
				'alt' => '',
			]),
			[$model->viewUrl]
		) ?>
	</div>

	<div class="col-md-5">
		<h3><?= Html::a(Html::encode($model->title), [$model->viewUrl]) ?></h3>
		<p><?= Html::encode($model->summary) ?></p>
		<?= Html::a('View Project', [$model->viewUrl], ['class' => 'btn btn-primary']) ?>
	</div>
</div>
<!-- /.row -->
<hr>
