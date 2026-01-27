<?php
/**
 * @p2m/th/views/portfolio/site/stylish-portfolio.php
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

/** @var yii\web\View $this */

$this->title = 'Stylish Portfolio';

$themeAssetUrl = $this->params['themeAssetUrl'] ?? null;
if ($themeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException('themeAssetUrl not set; ensure the theme asset is registered in the layout.');
}

$extLink = static function (string $label, string $url, array $options = []): string {
	$options = array_merge([
		'target' => '_blank',
		'rel' => 'noopener noreferrer',
	], $options);

	return Html::a($label, $url, $options);
};
?>
<!-- Page Content -->
<div>
	<!-- Header-->
	<header class="masthead d-flex align-items-center" id="page-top">
		<div class="container px-4 px-lg-5 text-center">
			<h1 class="mb-1">Stylish Portfolio</h1>
			<h3 class="mb-5"><em>p2made theme, inspired by Start Bootstrap</em></h3>
			<?= Html::a('Find Out More', '#about', ['class' => 'btn btn-primary btn-xl js-scroll-trigger']) ?>
		</div>
	</header>

	<!-- About-->
	<section class="content-section bg-light" id="about">
		<div class="container px-4 px-lg-5 text-center">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-lg-10">
					<h2>Stylish Portfolio is the perfect theme for your next project!</h2>
					<p class="lead mb-5">
						This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
						<?= $extLink('Unsplash', 'https://unsplash.com/') ?>!
					</p>
					<?= Html::a('What We Offer', '#services', ['class' => 'btn btn-dark btn-xl js-scroll-trigger']) ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Services-->
	<section class="content-section bg-primary text-white text-center" id="services">
		<div class="container px-4 px-lg-5">
			<div class="content-section-heading">
				<h3 class="text-secondary mb-0">Services</h3>
				<h2 class="mb-5">What We Offer</h2>
			</div>
			<div class="row gx-4 gx-lg-5">
				<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
					<span class="service-icon rounded-circle mx-auto mb-3">
						<?= BI::i(BI::_PHONE)->size(2)->css('display', 'block')->css('line-height', '1') ?>
					</span>
					<h4><strong>Responsive</strong></h4>
					<p class="text-faded mb-0">Looks great on any screen size!</p>
				</div>
				<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
					<span class="service-icon rounded-circle mx-auto mb-3">
						<?= BI::i(BI::_PENCIL)->size(2)->css('display', 'block')->css('line-height', '1') ?>
					</span>
					<h4><strong>Redesigned</strong></h4>
					<p class="text-faded mb-0">Freshly redesigned for Bootstrap 5.</p>
				</div>
				<div class="col-lg-3 col-md-6 mb-5 mb-md-0">
					<span class="service-icon rounded-circle mx-auto mb-3">
						<?= BI::i(BI::_HEART_FILL)->size(2)->css('display', 'block')->css('line-height', '1') ?>
					</span>
					<h4><strong>Favorited</strong></h4>
					<p class="text-faded mb-0">
						Millions of users <?= BI::i(BI::_HEART)->size(1)->css('vertical-align', 'baseline') ?> Start Bootstrap!
					</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<span class="service-icon rounded-circle mx-auto mb-3">
						<?= BI::i(BI::_QUESTION)->size(2)->css('display', 'block')->css('line-height', '1') ?>
					</span>
					<h4><strong>Question</strong></h4>
					<p class="text-faded mb-0">I mustache you a question...</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Callout-->
	<section class="callout">
		<div class="container px-4 px-lg-5 text-center">
			<h2 class="mx-auto mb-5">
				Welcome to <em>your</em> next website!
			</h2>
			<?= $extLink('Download Now!', 'https://github.com/p2made/p2y2-themes', ['class' => 'btn btn-primary btn-xl']) ?>
		</div>
	</section>

	<!-- Portfolio-->
	<section class="content-section" id="portfolio">
		<div class="container px-4 px-lg-5">
			<div class="content-section-heading text-center">
				<h3 class="text-secondary mb-0">Portfolio</h3>
				<h2 class="mb-5">Recent Projects</h2>
			</div>

			<div class="row gx-0">
				<?php
				$portfolio = [
					[
						'title' => 'Stationary',
						'desc'  => 'A yellow pencil with envelopes on a clean, blue backdrop!',
						'img'   => $themeAssetUrl . '/img/portfolio-1.jpg',
					],
					[
						'title' => 'Ice Cream',
						'desc'  => 'A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!',
						'img'   => $themeAssetUrl . '/img/portfolio-2.jpg',
					],
					[
						'title' => 'Strawberries',
						'desc'  => 'Strawberries are such a tasty snack, especially with a little sugar on top!',
						'img'   => $themeAssetUrl . '/img/portfolio-3.jpg',
					],
					[
						'title' => 'Workspace',
						'desc'  => 'A yellow workspace with some scissors, pencils, and other objects.',
						'img'   => $themeAssetUrl . '/img/portfolio-4.jpg',
					],
				];

				foreach ($portfolio as $p):
					$img = Html::img($p['img'], ['class' => 'img-fluid', 'alt' => $p['title']]);
					$caption = Html::tag('div',
						Html::tag('div',
							Html::tag('div', Html::encode($p['title']), ['class' => 'h2'])
							. Html::tag('p', Html::encode($p['desc']), ['class' => 'mb-0']),
							['class' => 'caption-content']
						),
						['class' => 'caption']
					);

					echo Html::tag('div',
						Html::a($caption . $img, '#!', ['class' => 'portfolio-item']),
						['class' => 'col-lg-6']
					);
				endforeach;
				?>
			</div>
		</div>
	</section>

	<!-- Call to Action-->
	<section class="content-section bg-primary text-white">
		<div class="container px-4 px-lg-5 text-center">
			<h2 class="mb-4">The buttons below are impossible to resist...</h2>
			<?= Html::a('Click Me!', '#!', ['class' => 'btn btn-xl btn-light me-4']) ?>
			<?= Html::a('Look at Me!', '#!', ['class' => 'btn btn-xl btn-dark']) ?>
		</div>
	</section>

	<!-- Map-->
	<div class="map" id="contact">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
		<br />
		<small>
			<?= $extLink('', 'https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A') ?>
		</small>
	</div>
</div>
