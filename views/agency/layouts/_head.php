<?php
/**
 * @p2m/th/views/agency/layouts/_head.php
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
$pageTitle = 'P2 Agency';
//$pageTitle = Html::encode($this->title);

$themeAssetUrl = $this->params['themeAssetUrl'] ?? null;
if ($themeAssetUrl === null) {
	throw new \yii\base\InvalidConfigException('themeAssetUrl not set; ensure the theme asset is registered in the layout.');
}

$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag([
	'name' => 'viewport',
	'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no'
]);
$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Agency theme from StartBootstrap'
]);
$this->registerMetaTag([
	'name' => 'author',
	'content' => 'Pedro Plowman'
]);
$this->registerLinkTag([
	'rel' => 'shortcut icon',
	'href' => $themeAssetUrl . '/ico/favicon.ico'
]);
?>
<title><?= $pageTitle ?></title><!-- DATA -->
<?php
	$this->registerCsrfMetaTags();
	$this->head();
?>
