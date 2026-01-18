<?php
/**
 * @p2m/sb/views/modern-business/layouts/_footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

use yii\bootstrap5\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
?>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
	<div class="container px-5">
		<div class="row align-items-center justify-content-between flex-column flex-sm-row">
			<div class="col-auto"><div class="small m-0 text-white">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></div></div>
			<div class="col-auto">
				<a class="link-light small" href="#!">Privacy</a>
				<span class="text-white mx-1">&middot;</span>
				<a class="link-light small" href="#!">Terms</a>
				<span class="text-white mx-1">&middot;</span>
				<a class="link-light small" href="#!">Contact</a>
			</div>
		</div>
	</div>
</footer>
