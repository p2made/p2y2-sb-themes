<?php
/**
 * @p2m/sb/views/modern-business/layouts/_head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var string|null  $title */

// App / page title
$appName   = Yii::$app->name;
$pageTitle = 'Modern Business';
//$pageTitle = Html::encode($this->title);

$themeAssetUrl = $this->params['themeAssetUrl'];

$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag([
	'name' => 'viewport',
	'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no'
]);
$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Modern business theme from StartBootstrap'
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
