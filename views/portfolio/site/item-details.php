<?php
/**
 * @p2m/th/views/portfolio/site/item-details.php
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

use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var p2m\th\models\PortfolioItem $model */
/** @var p2m\th\models\PortfolioItem[] $related */

$this->title = $model->title;
//$this->title = 'Portfolio Item Details';
$subTitle = 'Lorem ipsum dolor sit amet';
?>
<!-- Page Content -->
<div class="container">

	<h1 class="my-4">
		<?= Html::encode($model->title) ?>
		<small>– <?= Html::encode($subTitle) ?></small>
	</h1>

	<div class="row">
		<div class="col-md-8">
			<?= $model->image->o([
				'class' => 'img-fluid',
				'alt' => '',
			]) ?>
		</div>

		<div class="col-md-4">
			<h3 class="my-3">Project Description</h3>
			<p><?= Html::encode($model->summary) ?></p>

			<h3 class="my-3">Details</h3>
			<ul>
				<li>ID: <?= $model->id ?></li>
				<li>Theme: Portfolio</li>
				<li>Status: Demo</li>
			</ul>
		</div>
	</div>

	<?php if (!empty($related)): ?>
		<h3 class="my-4">Related Projects</h3>
		<div class="row">
			<?php foreach ($related as $r): ?>
				<div class="col-md-3 col-sm-6 mb-4">
					<?= Html::a(
						Html::img(
							'https://picsum.photos/seed/' . $r->id . '/500/300',
							['class' => 'img-fluid']
						),
						[$r->viewUrl]
					) ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

</div>
<!-- /.container -->
