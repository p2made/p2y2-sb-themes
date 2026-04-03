<?php
/**
 * @p2m/th/views/agency/layouts/_footer.php
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
use yii\helpers\Url;
use p2m\helpers\BI;
use p2m\helpers\Copyright;

/** @var yii\web\View $this */

?>
<!-- Footer-->
<footer class="footer mt-auto py-3 text-muted">
	<div class="container">
		<p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
		<p class="float-end"><?= Yii::powered() ?></p>
	</div>
</footer>
