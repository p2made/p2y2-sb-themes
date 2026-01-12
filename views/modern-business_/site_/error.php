<?php
/**
 * error.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="container site-error">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">

		<div class="col-lg-12">
			<div class="jumbotron">
				<div class="alert alert-danger text-left">
					<?= nl2br(Html::encode($message)) ?>
				</div>
				<p>Here are some helpful links to get you back on track:</p>
				<ul>
					<li><?= Html::a('Home', Url::to(['/site/index', 'view' => 'forms'])) ?></li>
					<li><?= Html::a('About', Url::to(['(.+)'])) ?></li>
					<li><?= Html::a('Services', Url::to(['/site/page', 'view' => 'services'])) ?></li>
					<li><?= Html::a('Contact', Url::to(['(.+)'])) ?></li>
					<li>Portfolio
						<ul>
							<li><?= Html::a('1 Column Portfolio', Url::to(['/site/page', 'view' => 'portfolio-1-col'])) ?></li>
							<li><?= Html::a('2 Column Portfolio', Url::to(['/site/page', 'view' => 'portfolio-2-col'])) ?></li>
							<li><?= Html::a('3 Column Portfolio', Url::to(['/site/page', 'view' => 'portfolio-3-col'])) ?></li>
							<li><?= Html::a('4 Column Portfolio', Url::to(['/site/page', 'view' => 'portfolio-4-col'])) ?></li>
							<li><?= Html::a('Single Portfolio Item', Url::to(['/site/page', 'view' => 'portfolio-item'])) ?></li>
						</ul>
					</li>
					<li>Blog
						<ul>
							<li><?= Html::a('Blog Home 1', Url::to(['/site/page', 'view' => 'blog-home-1'])) ?></li>
							<li><?= Html::a('Blog Home 2', Url::to(['/site/page', 'view' => 'blog-home-2'])) ?></li>
							<li><?= Html::a('Blog Post', Url::to(['/site/page', 'view' => 'blog-post'])) ?></li>
						</ul>
					</li>
					<li>Other Pages
						<ul>
							<li><?= Html::a('Full Width Page', Url::to(['/site/page', 'view' => 'full-width'])) ?></li>
							<li><?= Html::a('Sidebar Page', Url::to(['/site/page', 'view' => 'sidebar'])) ?></li>
							<li><?= Html::a('FAQ', Url::to(['/site/page', 'view' => 'faq'])) ?></li>
							<li><?= Html::a('Pricing Table', Url::to(['/site/page', 'view' => 'pricing'])) ?></li>
							<li><?= Html::a('404', Url::to(['/site/page', 'view' => '404'])) ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
