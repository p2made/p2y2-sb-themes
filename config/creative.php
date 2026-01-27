<?php
/**
 * Theme config: creative
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Creative',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2CreativeController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/creative',
				],
			],
		],
	],
];
