<?php
/**
 * Theme config: header-footer
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Header Footer',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2HeaderFooterController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/header-footer',
				],
			],
		],
	],
];
