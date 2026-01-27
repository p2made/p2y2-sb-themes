<?php
/**
 * Theme config: business-casual
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Business Casual',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2BusinessCasualController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/business-casual',
				],
			],
		],
	],
];
