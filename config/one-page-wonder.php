<?php
/**
 * Theme config: one-page-wonder
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – One Page Wonder',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2OnePageWonderController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/one-page-wonder',
				],
			],
		],
	],
];
