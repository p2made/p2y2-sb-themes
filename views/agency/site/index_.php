<?php
/**
 * @p2m/th/views/agency/site/index.php
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

$pageTitle = Html::encode($this->title);

$themeAssetUrl = $this->params['themeAssetUrl'] ?? null;
if ($themeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException(
		'themeAssetUrl not set; ensure the theme asset is registered in the layout.'
	);
}

$cat = 'p2m.th.agency';
$t = static fn(string $message, array $params = []) => Yii::t($cat, $message, $params);

$data = require dirname(__DIR__, 3) . '/data/p2-agency-data.php';

// Demo data: portfolio items (grid + modals)
$portfolio = $data['portfolio'];

/**
echo $this->render('_portfolio-grid', [
	'portfolioItems' => $portfolioItems,
]);
*/

?>
<div>
	<!-- Masthead -->
	<?= $this->render('_masthead', [
		't'    => $t,
		'data' => $data['masthead'],
		'servicesAnchor' => '#services',
	]) ?>

	<!-- Services-->
	<?= $this->render('_services', [
		't'    => $t,
		'data' => $data['services'],
	]) ?>

	<!-- Portfolio Grid -->
	<?= $this->render('_portfolio-grid', [
		't'    => $t,
		'data' => $data['portfolio'],
	]) ?>

	<!-- About-->
	<section class="page-section" id="about" aria-labelledby="about-title">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase" id="about-title">
					<?= Html::encode(Yii::t($cat, 'About')) ?>
				</h2>
				<h3 class="section-subheading text-muted">
					<?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet consectetur.')) ?>
				</h3>
			</div>

			<ul class="timeline">
				<li>
					<div class="timeline-image">
						<?= Html::img($themeAssetUrl . '/img/about/1.jpg', [
							'class' => 'rounded-circle img-fluid',
							'alt' => Yii::t($cat, 'About image 1'),
							'loading' => 'lazy',
						]) ?>
					</div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h3 class="h4"><?= Html::encode(Yii::t($cat, '2009-2011')) ?></h3>
							<h4 class="subheading h5"><?= Html::encode(Yii::t($cat, 'Our Humble Beginnings')) ?></h4>
						</div>
						<div class="timeline-body">
							<p class="text-muted"><?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!')) ?></p>
						</div>
					</div>
				</li>

				<li class="timeline-inverted">
					<div class="timeline-image">
						<?= Html::img($themeAssetUrl . '/img/about/2.jpg', [
							'class' => 'rounded-circle img-fluid',
							'alt' => Yii::t($cat, 'About image 2'),
							'loading' => 'lazy',
						]) ?>
					</div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h3 class="h4"><?= Html::encode(Yii::t($cat, 'March 2011')) ?></h3>
							<h4 class="subheading h5"><?= Html::encode(Yii::t($cat, 'An Agency is Born')) ?></h4>
						</div>
						<div class="timeline-body">
							<p class="text-muted"><?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!')) ?></p>
						</div>
					</div>
				</li>

				<li>
					<div class="timeline-image">
						<?= Html::img($themeAssetUrl . '/img/about/3.jpg', [
							'class' => 'rounded-circle img-fluid',
							'alt' => Yii::t($cat, 'About image 3'),
							'loading' => 'lazy',
						]) ?>
					</div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h3 class="h4"><?= Html::encode(Yii::t($cat, 'December 2015')) ?></h3>
							<h4 class="subheading h5"><?= Html::encode(Yii::t($cat, 'Transition to Full Service')) ?></h4>
						</div>
						<div class="timeline-body">
							<p class="text-muted"><?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!')) ?></p>
						</div>
					</div>
				</li>

				<li class="timeline-inverted">
					<div class="timeline-image">
						<?= Html::img($themeAssetUrl . '/img/about/4.jpg', [
							'class' => 'rounded-circle img-fluid',
							'alt' => Yii::t($cat, 'About image 4'),
							'loading' => 'lazy',
						]) ?>
					</div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h3 class="h4"><?= Html::encode(Yii::t($cat, 'July 2020')) ?></h3>
							<h4 class="subheading h5"><?= Html::encode(Yii::t($cat, 'Phase Two Expansion')) ?></h4>
						</div>
						<div class="timeline-body">
							<p class="text-muted"><?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!')) ?></p>
						</div>
					</div>
				</li>

				<li class="timeline-inverted" aria-label="<?= Html::encode(Yii::t($cat, 'Be part of our story')) ?>">
					<div class="timeline-image">
						<h4>
							<?= Html::encode(Yii::t($cat, 'Be Part')) ?><br>
							<?= Html::encode(Yii::t($cat, 'Of Our')) ?><br>
							<?= Html::encode(Yii::t($cat, 'Story!')) ?>
						</h4>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Team-->
	<section class="page-section bg-light" id="team" aria-labelledby="team-title">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase" id="team-title">
					<?= Html::encode(Yii::t($cat, 'Our Amazing Team')) ?>
				</h2>
				<h3 class="section-subheading text-muted">
					<?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet consectetur.')) ?>
				</h3>
			</div>

			<div class="row">
				<?php
					$team = [
						[
							'name' => 'Parveen Anand',
							'role' => Yii::t($cat, 'Lead Designer'),
							'img'  => $themeAssetUrl . '/img/team/1.jpg',
						],
						[
							'name' => 'Diana Petersen',
							'role' => Yii::t($cat, 'Lead Marketer'),
							'img'  => $themeAssetUrl . '/img/team/2.jpg',
						],
						[
							'name' => 'Larry Parker',
							'role' => Yii::t($cat, 'Lead Developer'),
							'img'  => $themeAssetUrl . '/img/team/3.jpg',
						],
					];

					$socialBtn = function (string $href, string $label, string $biConst) {
						return Html::a(
							(string) BI::i($biConst)->size(5),
							$href,
							[
								'class' => 'btn btn-dark btn-social mx-2',
								'aria-label' => $label,
								'target' => '_blank',
								'rel' => 'noopener',
							]
						);
					};
				?>

				<?php foreach ($team as $member): ?>
					<div class="col-lg-4">
						<div class="team-member">
							<?= Html::img($member['img'], [
								'class' => 'mx-auto rounded-circle',
								'alt' => Yii::t($cat, 'Photo of {name}', ['name' => $member['name']]),
								'loading' => 'lazy',
							]) ?>
							<h3 class="h4"><?= Html::encode($member['name']) ?></h3>
							<p class="text-muted"><?= Html::encode($member['role']) ?></p>

							<?php
								// Placeholders – consumers can wire these up.
								echo $socialBtn('#!', Yii::t($cat, '{name} Twitter profile', ['name' => $member['name']]), BI::_TWITTER);
								echo $socialBtn('#!', Yii::t($cat, '{name} Facebook profile', ['name' => $member['name']]), BI::_FACEBOOK);
								echo $socialBtn('#!', Yii::t($cat, '{name} LinkedIn profile', ['name' => $member['name']]), BI::_LINKEDIN);
							?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<p class="large text-muted">
						<?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.')) ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Clients-->
	<div class="py-5" aria-label="<?= Html::encode(Yii::t($cat, 'Client logos')) ?>">
		<div class="container">
			<div class="row align-items-center">
				<?php
					$clients = [
						['name' => 'Microsoft', 'logo' => $themeAssetUrl . '/img/logos/microsoft.svg', 'href' => '#!'],
						['name' => 'Google',    'logo' => $themeAssetUrl . '/img/logos/google.svg',    'href' => '#!'],
						['name' => 'Facebook',  'logo' => $themeAssetUrl . '/img/logos/facebook.svg',  'href' => '#!'],
						['name' => 'IBM',       'logo' => $themeAssetUrl . '/img/logos/ibm.svg',       'href' => '#!'],
					];
				?>
				<?php foreach ($clients as $c): ?>
					<div class="col-md-3 col-sm-6 my-3">
						<?= Html::a(
							Html::img($c['logo'], [
								'class' => 'img-fluid img-brand d-block mx-auto',
								'alt' => Yii::t($cat, '{name} logo', ['name' => $c['name']]),
								'loading' => 'lazy',
							]),
							$c['href'],
							[
								'target' => '_blank',
								'rel' => 'noopener',
							]
						) ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<!-- Contact-->
	<section class="page-section" id="contact" aria-labelledby="contact-title">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase" id="contact-title">
					<?= Html::encode(Yii::t($cat, 'Contact Us')) ?>
				</h2>
				<h3 class="section-subheading text-muted">
					<?= Html::encode(Yii::t($cat, 'Lorem ipsum dolor sit amet consectetur.')) ?>
				</h3>
			</div>

			<form id="contactForm" novalidate>
				<div class="row align-items-stretch mb-5">
					<div class="col-md-6">
						<div class="form-group">
							<label class="visually-hidden" for="name">
								<?= Html::encode(Yii::t($cat, 'Your Name')) ?>
							</label>
							<input class="form-control" id="name" type="text"
								placeholder="<?= Html::encode(Yii::t($cat, 'Your Name *')) ?>"
								required aria-required="true">
							<div class="invalid-feedback"><?= Html::encode(Yii::t($cat, 'A name is required.')) ?></div>
						</div>

						<div class="form-group">
							<label class="visually-hidden" for="email">
								<?= Html::encode(Yii::t($cat, 'Your Email')) ?>
							</label>
							<input class="form-control" id="email" type="email"
								placeholder="<?= Html::encode(Yii::t($cat, 'Your Email *')) ?>"
								required aria-required="true" autocomplete="email">
							<div class="invalid-feedback"><?= Html::encode(Yii::t($cat, 'An email is required.')) ?></div>
						</div>

						<div class="form-group mb-md-0">
							<label class="visually-hidden" for="phone">
								<?= Html::encode(Yii::t($cat, 'Your Phone')) ?>
							</label>
							<input class="form-control" id="phone" type="tel"
								placeholder="<?= Html::encode(Yii::t($cat, 'Your Phone *')) ?>"
								required aria-required="true" autocomplete="tel">
							<div class="invalid-feedback"><?= Html::encode(Yii::t($cat, 'A phone number is required.')) ?></div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group form-group-textarea mb-md-0">
							<label class="visually-hidden" for="message">
								<?= Html::encode(Yii::t($cat, 'Your Message')) ?>
							</label>
							<textarea class="form-control" id="message"
								placeholder="<?= Html::encode(Yii::t($cat, 'Your Message *')) ?>"
								required aria-required="true" rows="8"></textarea>
							<div class="invalid-feedback"><?= Html::encode(Yii::t($cat, 'A message is required.')) ?></div>
						</div>
					</div>
				</div>

				<div class="text-center">
					<button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">
						<?= Html::encode(Yii::t($cat, 'Send Message')) ?>
					</button>
				</div>
			</form>
		</div>
	</section>

	<!-- Portfolio Modals-->
	<?php foreach ($portfolio as $p): ?>
		<?php
			$modalId = 'portfolioModal' . (int)$p['id'];
			$labelId = $modalId . 'Label';
		?>
		<div class="portfolio-modal modal fade"
			id="<?= Html::encode($modalId) ?>"
			tabindex="-1"
			aria-labelledby="<?= Html::encode($labelId) ?>"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<button type="button"
						class="close-modal"
						data-bs-dismiss="modal"
						aria-label="<?= Html::encode(Yii::t($cat, 'Close modal')) ?>">
						<?= Html::img($themeAssetUrl . '/img/close-icon.svg', ['alt' => '']) ?>
					</button>

					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<h2 class="text-uppercase" id="<?= Html::encode($labelId) ?>">
										<?= Html::encode(Yii::t($cat, 'Project Name')) ?>
									</h2>
									<p class="item-intro text-muted"><?= Html::encode($p['intro']) ?></p>

									<?= Html::img($p['image'], [
										'class' => 'img-fluid d-block mx-auto',
										'alt' => Yii::t($cat, 'Project image: {title}', ['title' => $p['heading']]),
										'loading' => 'lazy',
									]) ?>

									<p><?= Html::encode(Yii::t($cat, 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!')) ?></p>

									<ul class="list-inline">
										<li>
											<strong><?= Html::encode(Yii::t($cat, 'Client:')) ?></strong>
											<?= Html::encode($p['client']) ?>
										</li>
										<li>
											<strong><?= Html::encode(Yii::t($cat, 'Category:')) ?></strong>
											<?= Html::encode($p['category']) ?>
										</li>
									</ul>

									<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
										<?= BI::i(BI::_X)->size(2)->css(['margin-right' => '.25rem'])->ariaHidden(true) ?>
										<?= Html::encode(Yii::t($cat, 'Close Project')) ?>
									</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
