<?php
/**
 * p2y2-sb-themes/i18n/config.php
 *
 * @author Pedro Plowman
 * @copyright Copyright © Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

return [
	'sourcePath'     => '@vendor/p2made/p2y2-sb-themes',
	'translator'     => ['\Yii::t', 'Yii::t'],
	'sourceLanguage' => 'en',
	'format'         => 'php',
	'sort'           => true,
	'overwrite'      => true,
	'removeUnused'   => false,
	'markUnused'     => true,
	'only'           => ['*.php'],
	'except' => [
		'/assets/',
		'/config/',
		'/controllers/',
		'/demo/',
		'/i18n/',
		'/models/',
		'/tests/',
		'/z_gitignore/',
	],
	'ignoreCategories' => [
		'usuario',
	],
];
