<?php
/**
 * @p2m/th/views/test/site/index.php
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
use p2m\helpers\EI;
use p2m\helpers\FI;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$data = require dirname(__DIR__, 3) . '/data/p2-test-data.php';

$bi = $data['bootstrapIcons'];
$ei = $data['emojiIcons'];
$fi = $data['flagIcons'];
?>
<div class="site-index">
	<div class="p-5 mb-4 bg-transparent rounded-3">
		<div class="container-fluid py-5 text-center">
			<h1 class="display-4">Test!</h1>
			<p class="fs-5 fw-light">You have successfully created your Yii-powered application.</p>
			<p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
		</div>
	</div>

	<div class="body-content">

		<div class="row" id="bi">
			<?php foreach ($bi as $icon): ?>
				<div class="col">
					<?= BI::i($icon) ?><br>
					<small><?= Html::encode($icon) ?></small>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="ei">
			<?php foreach ($ei as $icon): ?>
				<div class="col">
					<?= EI::i($icon) ?><br>
					<small><?= Html::encode($icon) ?></small>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="fi">
			<?php foreach ($fi as $icon): ?>
				<div class="col">
					<?= FI::i($icon) ?><br>
					<small><?= Html::encode($icon) ?></small>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</div>
