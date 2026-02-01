<?php
/**
 * @p2m/th/views/agency/site/_portfolio-grid.php
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

// Small helper: plus icon in a circle overlay (no Font Awesome).
$plusOverlay = static function (): string {
	return Html::tag('span',
		(string) BI::i(BI::_PLUS)->size(2),
		[
			'class' => 'p2m-icon-foreground',
			'aria-hidden' => 'true',
		]
	);
};

$themeAssetUrl = $this->params['themeAssetUrl'] ?? null;
if ($themeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException(
		'themeAssetUrl not set; ensure the theme asset is registered in the layout.'
	);
}

/*
		'items' => [
			[
				'id' => 1,
				'title'    => Yii::t($cat, 'Threads'),
				'subtitle' => Yii::t($cat, 'Illustration'),
				'intro'    => Yii::t($cat, 'Lorem ipsum dolor sit amet consectetur.'),
				'image'    => $themeAssetUrl . '/img/portfolio/1.jpg',
				'alt'      => Yii::t($cat, 'Portfolio item: Threads'),
				'client'   => Yii::t($cat, 'Threads'),
				'category' => Yii::t($cat, 'Illustration'),
			],
		],
*/

/**
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
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio" aria-labelledby="<?= Html::encode($titleId) ?>">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase" id="<?= Html::encode($titleId) ?>">
				<?= Html::encode($t('Portfolio')) ?>
			</h2>
			<h3 class="section-subheading text-muted">
				<?= Html::encode($t('Lorem ipsum dolor sit amet consectetur.')) ?>
			</h3>
		</div>

		<div class="row">
			<?php foreach ($items as $item): ?>
				<?php
					$id        = $item['id'];
					$modalId   = 'portfolioModal' . $id;
					$title     = $t($item['title']);
					$subtitle  = $t($item['subtitle']);
					$image     = $themeAssetUrl . '/img/portfolio/' . (string)$item['id'] . '.jpg';
					$alt       = $t($item['alt']);
					// a11y label for opening the modal
					$openLabel = $t('Open portfolio item: {title}', ['title' => $title]);
				?>
				<div class="col-lg-4 col-sm-6 mb-4<?= $id === 6 ? '' : '' ?>">
					<div class="portfolio-item">

						<?= Html::a(
							Html::tag('div',
								Html::tag('div', $plusOverlay(), ['class' => 'portfolio-hover-content']),
								['class' => 'portfolio-hover']
							) .
							Html::img($image, [
								'class' => 'img-fluid',
								'alt' => $alt,
								'loading' => 'lazy',
							]),
							'#' . $modalId,
							[
								'class' => 'portfolio-link',
								'data-bs-toggle' => 'modal',
								'role' => 'button',
								'aria-label' => $openLabel,
							]
						) ?>

						<div class="portfolio-caption">
							<div class="portfolio-caption-heading"><?= Html::encode($title) ?></div>
							<div class="portfolio-caption-subheading text-muted"><?= Html::encode($subtitle) ?></div>
						</div>

					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Portfolio</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 1-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Threads</div>
						<div class="portfolio-caption-subheading text-muted">Illustration</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 2-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Explore</div>
						<div class="portfolio-caption-subheading text-muted">Graphic Design</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 3-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Finish</div>
						<div class="portfolio-caption-subheading text-muted">Identity</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<!-- Portfolio item 4-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Lines</div>
						<div class="portfolio-caption-subheading text-muted">Branding</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
				<!-- Portfolio item 5-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Southwest</div>
						<div class="portfolio-caption-subheading text-muted">Website Design</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<!-- Portfolio item 6-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="...">
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Window</div>
						<div class="portfolio-caption-subheading text-muted">Photography</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
