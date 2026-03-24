<?php
/**
 * @p2m/th/views/agency/site/_masthead.php
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

/**
 * @var yii\web\View $this
 * @var callable $t
 * @var array $data
 * @var string $servicesAnchor
 */

$servicesAnchor ??= '#services';
$titleId = $data['titleId'];

// Messages
$kicker = $t($data['kicker']);
$title  = $t($data['title']);
$cta    = $t($data['cta']);
?>
<!-- Masthead-->
<header class="masthead" aria-labelledby="<?= Html::encode($titleId) ?>">
	<div class="container">
		<div class="masthead-subheading">
			<?= Html::encode($kicker) ?>
		</div>

		<h1 class="masthead-heading text-uppercase" id="<?= Html::encode($titleId) ?>">
			<?= Html::encode($title) ?>
		</h1>

		<?= Html::a(
			Html::encode($cta), $servicesAnchor,
			['class' => 'btn btn-primary btn-xl text-uppercase',]
		) ?>
	</div>
</header>
