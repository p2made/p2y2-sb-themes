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

use p2m\helpers\FA;
?>
	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4">
						<h3>Location</h3>
						<p>Currie St
						<br>Nambour, Qld 4560</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Around the Web</h3>
						<ul class="list-inline">
							<li>
								<a href="#" class="btn-social btn-outline">
									<?= FA::i('facebook') ?>
								</a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline">
									<?= FA::i('google') ?>
								</a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline">
									<?= FA::i('twitter') ?>
								</a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline">
									<?= FA::i('linkedin') ?>
								</a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline">
									<?= FA::i('dribbble') ?>
								</a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-4">
						<h3>About Freelancer</h3>
						<p>Freelancer is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
				<p class="pull-left">
					Copyright <?= FA::i('copyright') ?> Your Website <?= date("Y") ?>
				</p>
				<p class="pull-right">
					<?= Yii::powered() ?>
				</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

