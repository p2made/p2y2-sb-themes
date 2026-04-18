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

$bi = $data['Bootstrap'];
$ei = $data['Emoji'];
$fi = $data['Flag'];
?>
<div class="site-index">
	<div class="p-5 mb-4 bg-transparent rounded-3">
		<div class="container-fluid py-5 text-center">
			<h1 class="display-4">Test!</h1>
			<p class="fs-5 fw-light">p2y2 test page</p>
		</div>
	</div>

	<div class="container body-content">

		<div class="row" id="bi-circle-multipliers-0">
			<div class="col-12">
				<h2>Icons Circle Multipliers<br>
				<small><code>BI::c(BI::i($name)->x($m))</code></small></h2>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(1)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(2)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(3)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(4)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(5)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(6)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(7)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(8)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(9)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(10)) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
		</div>

		<div class="row" id="bi-circle-multipliers-1">
			<div class="col-12">
				<h2>Icons Circle Multipliers<br>
				<small><code>BI::c(BI::i($name)->x($m))</code></small></h2>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(1))->x(1) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(2))->x(2) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(3))->x(3) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(4))->x(4) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(5))->x(5) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(6))->x(6) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(7))->x(7) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(8))->x(8) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(9))->x(9) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::c(BI::i(BI::_SUBSTACK)->x(10))->x(10) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
		</div>

		<div class="row" id="bi-s1-multiplied">
			<div class="col-12">
				<h2>Icons Multipliers<br>
				<small><code>BI::i($name)->s(1)->x($m)</code></small></h2>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(1) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(2) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(3) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(4) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(5) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(6) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(7) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(8) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(9) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1)->x(10) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
		</div>

		<div class="row" id="bi-multipliers">
			<div class="col-12">
				<h2>Icons Multipliers<br>
				<small><code>BI::i($name)->x($m)</code></small></h2>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(1) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(2) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(3) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(4) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(5) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(6) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(7) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(8) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(9) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->x(10) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
		</div>

		<div class="row" id="bi-sizes">
			<div class="col-12">
				<h2>Icons Sizes<br>
				<small><code>BI::i($name)->s($s)</code></small></h2>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(1) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(2) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(3) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(4) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(5) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
			<div class="col text-center">
				<?= BI::i(BI::_SUBSTACK)->s(6) ?>
				<br><?= Html::encode(BI::_SUBSTACK) ?>
			</div>
		</div>

		<div class="row" id="bi-icons">
			<div class="col-12">
				<h2>Bootstrap Icons<br>
				<small><code>BI::i($name)</code></small></h2>
			</div>
			<?php foreach ($bi as $icon): ?>
				<div class="col-2 text-center">
					<span class="fs-1"><?= BI::i($icon) ?></span>
					<br><?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="bi-icons-circles">
			<div class="col-12">
				<h2>Bootstrap Icons Circles<br>
				<small><code>BI::c($icon)</code></small></h2>
			</div>
			<?php foreach ($bi as $icon): ?>
				<div class="col-2 text-center">
					<?= BI::c(BI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="bi-icons-squares">
			<div class="col-12">
				<h2>Bootstrap Icons Squares<br>
				<small><code>BI::s($icon)</code></small></h2>
			</div>
			<?php foreach ($bi as $icon): ?>
				<div class="col-2 text-center">
					<?= BI::s(BI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="ei-icons">
			<div class="col-12">
				<h2>Emoji Icons<br>
				<small><code>EI::i($name)</code></small></h2>
			</div>
			<?php foreach ($ei as $icon): ?>
				<div class="col-2 text-center">
					<span class="fs-1"><?= EI::i($icon) ?></span>
					<br><?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="ei-icons-circles">
			<div class="col-12">
				<h2>Emoji Icons Circles<br>
				<small><code>EI::c($icon)</code></small></h2>
			</div>
			<?php foreach ($ei as $icon): ?>
				<div class="col-2 text-center">
					<?= EI::c(EI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="ei-icons-squares">
			<div class="col-12">
				<h2>Emoji Icons Squares<br>
				<small><code>EI::s($icon)</code></small></h2>
			</div>
			<?php foreach ($ei as $icon): ?>
				<div class="col-2 text-center">
					<?= EI::s(EI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="fi-icons">
			<div class="col-12">
				<h2>Flag Icons<br>
				<small><code>FI::i($name)</code></small></h2>
			</div>
			<?php foreach ($fi as $icon): ?>
				<div class="col-2 text-center">
					<span class="fs-1"><?= FI::i($icon) ?></span>
					<br><?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="fi-icons-circles">
			<div class="col-12">
				<h2>Flag Icons Circles<br>
				<small><code>FI::c($icon)</code></small></h2>
			</div>
			<?php foreach ($fi as $icon): ?>
				<div class="col-2 text-center">
					<?= FI::c(FI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row" id="fi-icons-squares">
			<div class="col-12">
				<h2>Flag Icons Squares<br>
				<small><code>FI::s($icon)</code></small></h2>
			</div>
			<?php foreach ($fi as $icon): ?>
				<div class="col-2 text-center">
					<?= FI::s(FI::i($icon)->s(1)) ?><br>
					<?= Html::encode($icon) ?>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</div>
