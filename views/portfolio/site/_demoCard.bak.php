<?php
/**
 * views/portfolio/site/_demoCard.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

/**
 * @var string $title
 * @var string $url
 * @var string $imgUrl
 */

use yii\bootstrap5\Html;
?>

<div class="col-lg-4 col-sm-6 mb-4">
	<div class="card h-100">
		<?= Html::a(
			Html::img($imgUrl, [
				'alt' => $title,
				'class' => 'card-img-top',
			]),
			$url
		) ?>
		<div class="card-body">
			<h4 class="card-title">
				<?= Html::a(Html::encode($title), $url) ?>
			</h4>
		</div>
	</div>
</div>
