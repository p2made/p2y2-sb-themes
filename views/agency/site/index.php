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
</div>
