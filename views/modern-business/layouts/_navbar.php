<?php
/**
 * @p2m/th/views/modern-business/layouts/_navbar.php
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

// Basic items (adjust routes as you like)
$items = [
	['label' => 'Home',    'url' => ['/']],
	['label' => 'About',   'url' => ['/site/about']],
	['label' => 'Contact', 'url' => ['/site/contact']],
	['label' => 'Pricing', 'url' => ['/site/pricing']],
	['label' => 'FAQ',     'url' => ['/site/faq']],
];

$dropdowns = [
	[
		'id' => 'navbarDropdownBlog',
		'label' => 'Blog',
		'items' => [
			['label' => 'Blog Home', 'url' => ['/blog/index']],
			['label' => 'Blog Post', 'url' => ['/blog/post']],
		],
	],
	[
		'id' => 'navbarDropdownPortfolio',
		'label' => 'Portfolio',
		'items' => [
			['label' => 'Portfolio Overview', 'url' => ['/portfolio/index']],
			['label' => 'Portfolio Item',     'url' => ['/portfolio/item']],
		],
	],
];

// Optional: show auth links in the navbar (Modern Business template doesn’t include these by default)
$authItems = [];
if (Yii::$app->user->isGuest) {
	$authItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	$authItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}
else {
	$authItems[] = ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'method' => 'post'];
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container px-5">
		<a class="navbar-brand" href="<?= Url::to(['/']) ?>"><?= Html::encode(Yii::$app->name) ?></a>

		<button class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

				<?php foreach ($items as $item): ?>
					<li class="nav-item">
						<?= Html::a(
							Html::encode($item['label']),
							$item['url'],
							['class' => 'nav-link']
						) ?>
					</li>
				<?php endforeach; ?>

				<?php foreach ($dropdowns as $dd): ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"
							id="<?= Html::encode($dd['id']) ?>"
							href="#"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							<?= Html::encode($dd['label']) ?>
						</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="<?= Html::encode($dd['id']) ?>">
							<?php foreach ($dd['items'] as $sub): ?>
								<li>
									<?= Html::a(
										Html::encode($sub['label']),
										$sub['url'],
										['class' => 'dropdown-item']
									) ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endforeach; ?>

				<?php if (!empty($authItems)): ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"
							id="navbarDropdownAccount"
							href="#"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							Account
						</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
							<?php foreach ($authItems as $a): ?>
								<li>
									<?php
									$options = ['class' => 'dropdown-item'];
									if (!empty($a['method']) && $a['method'] === 'post')
									{
										$options['data-method'] = 'post';
									}
									echo Html::a(Html::encode($a['label']), $a['url'], $options);
									?>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</nav>
