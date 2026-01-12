<?php
/**
 * _header.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\helpers\Html;
use p2m\helpers\FA;
?>
<!-- Header -->
<a name="about"></a>
<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-message">
					<h1><?= Html::encode($this->title) ?></h1>
					<h3>A Template by Start Bootstrap &amp; Pedro fp</h3>
					<hr class="intro-divider">
					<ul class="list-inline intro-social-buttons">
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('twitter') ?>
								<span class="network-name">Twitter</span>
							</a>
						</li>
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('github') ?>
								<span class="network-name">Github</span>
							</a>
						</li>
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('linkedin') ?>
								<span class="network-name">Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

