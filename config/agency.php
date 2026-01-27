<?php
/**
 * Theme config: agency
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Agency',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2AgencyController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/agency',
				],
			],
		],
		'i18n' => [
			'translations' => [
				'sw.sb*' => [
					'class' => \yii\i18n\PhpMessageSource::class,
					'basePath' => '@vendor/p2made/p2y2-sb-themes/i18n/agency',
					'sourceLanguage' => 'en',
					'fileMap' => [
						'p2m.th.agency' => 'p2m.th.agency.php',
					],
				],
			],
		],
	],
];
