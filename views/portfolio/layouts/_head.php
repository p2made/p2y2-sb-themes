<?php
/**
 * @p2m/sb/views/portfolio/layouts/_head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 */

use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var string|null  $title */

// App / page title
$appName   = Yii::$app->name;
$pageTitle = 'Portfolio';
//$pageTitle = Html::encode($this->title);

$p2mThemeAssetUrl = $this->params['p2mThemeAssetUrl'] ?? null;
if ($p2mThemeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException('p2mThemeAssetUrl not set; ensure the theme asset is registered in the layout.');
}

$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag([
	'name' => 'viewport',
	'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no'
]);
$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Portfolio pages from StartBootstrap'
]);
$this->registerMetaTag([
	'name' => 'author',
	'content' => 'Pedro Plowman'
]);
$this->registerLinkTag([
	'rel' => 'shortcut icon',
	'href' => $p2mThemeAssetUrl . '/ico/favicon.ico'
]);


?>
<title><?= $pageTitle ?></title><!-- DATA -->
<?php
	$this->registerCsrfMetaTags();
	$this->head();
?>
