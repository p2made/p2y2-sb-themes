<?php
/**
 * @p2m/sb/views/portfolio/site/_1columnItem.php
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
use yii\helpers\Url;

$img = 'https://picsum.photos/seed/' . $model->id . '/700/300';
$url = Url::to(['site/item-details', 'id' => $model->id]);
?>
<div class="row">
	<div class="col-md-7">
		<?= Html::a(
			Html::img($img, ['class' => 'img-fluid rounded mb-3 mb-md-0', 'alt' => '']),
			$model->viewUrl ?? '#'
		) ?>
	</div>
	<div class="col-md-5">
		<h3><?= Html::a(Html::encode($model->title), $model->viewUrl ?? '#') ?></h3>
		<p class="card-text"><?= Html::encode($model->summary) ?></p>
		<a class="btn btn-primary" href="#">View Project</a>
	</div>
</div>
<!-- /.row -->
<hr>
