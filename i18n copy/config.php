<?php
/**
 * p2y2-themes/i18n/config.php
 *
 * Base Yii message extractor config for this package.
 *
 * @author Pedro Plowman
 * @copyright Copyright © Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

return [
	// Extract from the package source (not the demo app)
	'sourcePath'     => '@vendor/p2made/p2y2-themes',
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
		'/i18n/',    // don't scan generated messages
		'/models/',
		'/tests/',
		'/z_gitignore/',
	],
];
