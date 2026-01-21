<?php
/**
 * @p2m/sb/views/portfolio/site/index.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

/** @var yii\web\View $this */
use yii\bootstrap5\Html;
use p2m\sb\assets\P2PortfolioDemoAsset;

$this->title = 'Portfolio';

// Register asset because we need its baseUrl
//$this->params['themeAssetUrl']  = P2PortfolioDemoAsset::register($this)->baseUrl;
//$themeAssetUrl = $this->params['themeAssetUrl'];
$themeAssetUrl = P2PortfolioDemoAsset::register($this)->baseUrl;

// Load demo data
$data = require dirname(__DIR__, 3) . '/demo/data/p2sb-themes-data.php';

$group = $data['portfolio'] ?? null;
$tiles = $group['themes'] ?? [];
?>
<div class="site-index">
	<!-- Page Content -->
	<div class="container">

		<h1 class="my-4"><?= Html::encode($group['title'] ?? $this->title) ?></h1>

		<div class="row">
			<?php foreach ($tiles as $key => $tile): ?>
				<?php
					$title  = $tile['title'] ?? $key;
					$url    = $tile['url'] ?? '#';
					$imgRel = $tile['img'] ?? null;

					$imgUrl = $imgRel
						? $themeAssetUrl . $imgRel
						: '';
				?>

				<?= $this->render('_demoCard', [
					'title' => $title,
					'url' => $url,
					'imgUrl' => $imgUrl,
				]) ?>
			<?php endforeach; ?>
		</div>

	</div>
	<!-- /.container -->
</div>
