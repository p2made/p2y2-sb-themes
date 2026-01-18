<?php
/**
 * @p2m/sb/views/portfolio/site/1-column.php
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

/** @var yii\web\View $this */
/** @var yii\data\ArrayDataProvider $dataProvider */

use yii\bootstrap5\Html;
use yii\widgets\ListView;

$this->title = 'Portfolio';
$subTitle = '1 Column Layout';
?>
<!-- Page Content -->
<div class="container">

	<h1 class="my-4">
		<?= Html::encode($this->title) ?>
		<small>– <?= Html::encode($subTitle) ?></small>
	</h1>

	<?= ListView::widget([
		'dataProvider' => $dataProvider,
		'layout' => "{items}\n{pager}",
		'itemOptions' => ['tag' => false],
		'itemView' => function ($model) {
			/** @var \p2m\sb\models\PortfolioItem $model */
			return $this->render('_1columnItem', ['model' => $model]);
		},
		'pager' => [
			'pagination' => $dataProvider->pagination,
			'options' => ['class' => 'pagination justify-content-center'],
			'pageCssClass' => 'page-item',
			'linkOptions' => ['class' => 'page-link'],
			'activePageCssClass' => 'active',
			'disabledPageCssClass' => 'disabled',
			'prevPageLabel' => '&laquo;',
			'nextPageLabel' => '&raquo;',
		],
	]) ?>

</div>
<!-- /.container -->
