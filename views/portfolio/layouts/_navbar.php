<?php
/**
 * @p2m/th/views/modern-business/layouts/_navbar.php
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

/** @var yii\web\View $this */

// Basic items (adjust routes as you like)
$items = [
	['label' => 'Home', 'url' => ['/']],
];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container px-5">
		<a class="navbar-brand" href="<?= Url::to(['/']) ?>"><?= Html::encode(Yii::$app->name) ?></a>

		<button class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

				<?php foreach ($items as $item): ?>
					<li class="nav-item">
						<?= Html::a(
							Html::encode($item['label']),
							$item['url'],
							['class' => 'nav-link']
						) ?>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>
	</div>
</nav>
