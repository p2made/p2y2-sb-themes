<?php
/**
 * _contact.php
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
<a  name="contact"></a>
<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Connect to <?= Html::encode($this->title) ?>:</h2>
			</div>
			<div class="col-lg-6">
				<ul class="list-inline banner-social-buttons">
					<li>
						<a href="https://#" class="btn btn-default btn-lg">
							<?= FA::i('twitter') ?> <span class="network-name">Twitter</span>
						</a>
					</li>
					<li>
						<a href="https://#" class="btn btn-default btn-lg">
							<?= FA::i('github') ?> <span class="network-name">Github</span>
						</a>
					</li>
					<li>
						<a href="https://#" class="btn btn-default btn-lg">
							<?= FA::i('linkedin') ?> <span class="network-name">Linkedin</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

