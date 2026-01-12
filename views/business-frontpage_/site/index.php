<?php
/**
 * index.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2m\helpers\FA;

$this->title = 'Home';
?>

<?= $this->render('_header.php') ?>

<div class="container">
	<hr>

	<div class="row">
		<div class="col-sm-8">
			<h2>What We Do</h2>
			<p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
			<p>This Yii2 implementation of Business Frontpage is crafted with
				<?= FA::icon('heart') ?> by Pedro fp, on the
				<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
					Sunshine Coast <?= FA::icon(FA::_EXTERNAL_LINK) ?>
				</a>
			of Queensland Australia.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
			<p>
				<a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
			</p>
		</div>
		<div class="col-sm-4">
			<h2>Contact Us</h2>
			<address>
				<strong>P2 Start Bootstrap</strong>
				<br>Currie St
				<br>Nambour, Qld 4560
				<br>
			</address>
			<address>
				<abbr title="Phone">P:</abbr>+61-7-4567-4321
				<br>
				<abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
			</address>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-sm-4">
			<img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
			<h2>Marketing Box #1</h2>
			<p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
		</div>
		<div class="col-sm-4">
			<img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
			<h2>Marketing Box #2</h2>
			<p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
		</div>
		<div class="col-sm-4">
			<img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
			<h2>Marketing Box #3</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
		</div>
	</div>

	<hr>

	<?= $this->render('_footer.php') ?>
</div>
