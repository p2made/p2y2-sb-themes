<?php
/**
 * @p2m/th/views/agency/layouts/_navbar.php
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
/** @var string|null  $title */

$themeAssetUrl = $this->params['themeAssetUrl'] ?? null;
if ($themeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException('themeAssetUrl not set; ensure the theme asset is registered in the layout.');
}

$navItems = [
	['label' => Yii::t('p2m.th.agency', 'Services'),  'href' => '#services'],
	['label' => Yii::t('p2m.th.agency', 'Portfolio'), 'href' => '#portfolio'],
	['label' => Yii::t('p2m.th.agency', 'About'),     'href' => '#about'],
	['label' => Yii::t('p2m.th.agency', 'Team'),      'href' => '#team'],
	['label' => Yii::t('p2m.th.agency', 'Contact'),   'href' => '#contact'],
];

$brandImg = Html::img($themeAssetUrl . '/img/navbar-logo.svg', [
	'alt'   => 'P2 Agency',
	//'style' => 'height: 3rem;', // slightly larger than default
]);

$menuIcon = (string) BI::i(BI::_LIST)->size(2);
?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
		<?= Html::a($brandImg, '#page-top', ['class' => 'navbar-brand']) ?>

		<button class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarResponsive"
			aria-controls="navbarResponsive"
			aria-expanded="false"
			aria-label="<?= Yii::t('p2m.th.agency', 'Toggle navigation') ?>">
			<?= Yii::t('p2m.th.agency', 'Menu') ?>
			<span class="ms-1"><?= $menuIcon ?></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
				<?php foreach ($navItems as $item): ?>
					<li class="nav-item">
						<?= Html::a(
							Html::encode($item['label']),
							$item['href'],
							['class' => 'nav-link']
						) ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>
