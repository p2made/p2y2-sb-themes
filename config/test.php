<?php
/**
 * Theme config: test
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Test',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2TestController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/test',
				],
			],
		],
	],
];
