<?php
/**
 * @p2m/th/views/agency/site/_services.php
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
use p2m\helpers\BI;

/**
 * @var yii\web\View $this
 * @var callable $t
 * @var array $data
 */

$titleId = $data['titleId'];

// Section copy
$heading    = $t($data['heading']);
$subheading = $t($data['subheading']);
$items      = $data['items'];

/*
 * Small helper: "icon-in-circle" like the original fa-stack, but using BI.
 * (Keeps the theme look without Font Awesome dependency.)
 */
$iconStack = function (string $biConst, string $ariaLabel) {
	return Html::tag('span',
		Html::tag('span', '', ['class' => 'p2m-icon-circle']) .
		Html::tag('span', (string) BI::i($biConst)->s(1), [
			'class' => 'p2m-icon-foreground xl',
			'aria-hidden' => 'true',
		]) .
		Html::tag('span', Html::encode($ariaLabel), ['class' => 'visually-hidden']),
		['class' => 'p2m-icon-stack xl d-inline-block position-relative']
	);
};
?>

<!-- Services-->
<section class="page-section" aria-labelledby="<?= Html::encode($titleId) ?>">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase" id="services-title">
				<?= Html::encode($heading) ?>
			</h2>
			<h3 class="section-subheading text-muted">
				<?= Html::encode($subheading) ?>
			</h3>
		</div>
		<div class="row text-center">
			<?php foreach ($items as $item): ?>
				<?php
					$title = $t($item['title']);
					$text  = $t($item['text']);
				?>
				<div class="col-md-4">
					<?= BI::c(BI::i($item['icon']))->l($title)->s(6) ?>
					<h4 class="my-3"><?= $title ?></h4>
					<p class="text-muted"><?= $text ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
