<?php
/**
 * @p2m/sb/views/portfolio/site/3-column.php
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
$subTitle = '3 Column Layout';
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
		'itemView' => '_3columnItem',
		'pager' => [
			'options' => ['class' => 'pagination justify-content-center'],
			'linkOptions' => ['class' => 'page-link'],
			'pageCssClass' => 'page-item',
		],
	]) ?>

</div>
<!-- /.container -->
