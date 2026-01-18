<?php
/**
 * p2y2-sb-themes/config/_main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * To preview themes, copy this file to...
 *
 * @frontend/config/main.php
 */

use yii\helpers\ArrayHelper;

// Change $themeName using one of the names below to switch themes:
$themeName = 'modern-business'; // e.g. 'agency', 'modern-business', ''

/**
 * Theme names...
 * agency
 * basic-layouts
 * blog
 * business
 * business-casual
 * business-frontpage
 * clean-blog
 * coming-soon
 * creative
 * forms
 * freelancer
 * full
 * grayscale
 * header-footer
 * heroic-features
 * landing-page
 * modern-business
 * navigation
 * new-age
 * one-page-wonder
 * portfolio
 * resume
 * stylish-portfolio
 */

$vendorDir   = dirname(__DIR__, 2) . '/vendor';
$themeFile   = $vendorDir . '/p2made/p2y2-sb-themes/config/' . $themeName . '.php';
$defaultFile = $vendorDir . '/p2made/p2y2-sb-themes/config/_default.php';

$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

$config = [
	// Default @frontend/config/main.php contents

	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-frontend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'session' => [
			'name' => 'p2y2-sb-themes',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => \yii\log\FileTarget::class,
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'params' => $params,
];

if (is_file($themeFile)) {
	$config = ArrayHelper::merge($config, require $themeFile);
}
else {
	$config = ArrayHelper::merge($config, require $defaultFile);
}

return $config;
