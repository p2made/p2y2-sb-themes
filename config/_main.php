<?php
/**
 * @p2m/th/config/_main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * To preview themes, copy this file to...
 *
 * @frontend/config/main.php
 */

use yii\helpers\ArrayHelper;

// Change $themeName usine one of the names below to switch themes:
$themeName = 'portfolio'; // e.g. 'agency', 'modern-business', ''

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

$configDir   = dirname(__DIR__, 2) . '/vendor/p2made/p2y2-themes/config/';
$themeFile   = $configDir . $themeName . '.php';
$defaultFile = $configDir . '_default.php';

$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
	require $configDir . '/_params.php'
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
			'name' => 'p2y2-themes',
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
