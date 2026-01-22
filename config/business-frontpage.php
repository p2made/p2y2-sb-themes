<?php
/**
 * Theme config: business-frontpage
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Business Frontpage',
	'controllerMap' => [
		'site' => [
			'class' => p2m\sb\controllers\P2BusinessFrontpageController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/business-frontpage',
				],
			],
		],
	],
];
