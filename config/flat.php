<?php
/**
 * Theme config: flat
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Flat',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2FlatController::class,
		],
	],
	'components' => [
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
			],
		],
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/p2y2-themes/views/flat',
				],
			],
		],
		'i18n' => [
			'translations' => [
				'p2m.th*' => [
					'class' => \yii\i18n\PhpMessageSource::class,
					'basePath' => '@vendor/p2made/p2y2-themes/i18n/flat',
					'sourceLanguage' => 'en',
					'fileMap' => [
						'p2m.th.flat' => 'p2m.th.flat.php',
					],
				],
			],
		],
	],
];
