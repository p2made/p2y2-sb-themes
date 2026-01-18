<?php
/**
 * Theme config: grayscale
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Grayscale',
	'controllerMap' => [
		'site' => [
			'class' => p2m\sb\controllers\P2GrayscaleController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/grayscale',
				],
			],
		],
	],
];
