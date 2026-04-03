<?php
/**
 * @p2m/th/views/portfolio/layouts/_footer.php
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
use p2m\helpers\Copyright;

/** @var yii\web\View $this */
?>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
	<div class="container px-5">
		<div class="row align-items-center justify-content-between flex-column flex-sm-row">
			<div class="col-auto">
				<div class="small m-0 text-white">
					<?= Copyright::c() ?>
				</div>
			</div>
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
