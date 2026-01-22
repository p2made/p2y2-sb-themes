<?php
/**
 * @p2m/sb/views/portfolio/layouts/_stylish-nav.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

use yii\bootstrap5\Html;
use yii\helpers\Url;
use p2m\helpers\BI;

/** @var yii\web\View $this */

$links = [
	'Home'      => '#page-top',
	'About'     => '#about',
	'Services'  => '#services',
	'Portfolio' => '#portfolio',
	'Contact'   => '#contact',
];
?>
<!-- Navigation-->

<?= Html::a(
	BI::i(BI::_LIST)->size(4)->css('menu-icon'),
	'#',
	['class' => 'menu-toggle rounded']
) ?>

<nav id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<?= Html::a('Stylish Portfolio', '#page-top') ?>
		</li>

		<?php foreach ($links as $label => $anchor): ?>
			<li class="sidebar-nav-item">
				<?= Html::a($label, $anchor, ['class' => 'js-scroll-trigger']) ?>
			</li>
		<?php endforeach; ?>

		<li class="sidebar-nav-item">
			<?= Html::a('← Back to themes', Url::to(['/'])) ?>
		</li>
	</ul>
</nav>
