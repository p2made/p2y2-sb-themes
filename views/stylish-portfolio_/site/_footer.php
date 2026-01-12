<?php
/**
 * _footer.php
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
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h4><strong>Start Bootstrap</strong>
				</h4>
				<p>Currie St
					<br>Nambour, Qld 4560</p>
				<ul class="list-unstyled">
					<li><i class="fa fa-phone fa-fw"></i> +61 7 4567-4321</li>
					<li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
					</li>
				</ul>
				<br>
				<ul class="list-inline">
					<li>
						<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
					</li>
				</ul>
				<hr class="small">
				<p class="pull-left text-muted">
					Copyright <?= FA::i('copyright') ?> Your Website <?= date("Y") ?>
				</p>
				<p class="pull-right text-muted">
					<?= Yii::powered() ?>
				</p>
			</div>
		</div>
	</div>
</footer>

