<?php
/**
 * Theme config: triangle
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Triangle',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2TriangleController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/triangle',
				],
			],
		],
		'i18n' => [
			'translations' => [
				'p2m.th*' => [
					'class' => \yii\i18n\PhpMessageSource::class,
					'basePath' => '@vendor/p2made/p2y2-themes/i18n/triangle',
					'sourceLanguage' => 'en',
					'fileMap' => [
						'p2m.th.triangle' => 'p2m.th.triangle.php',
					],
				],
			],
		],
	],
];
