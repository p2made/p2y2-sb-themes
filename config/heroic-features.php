<?php
/**
 * Theme config: heroic-features
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Heroic Features',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2HeroicFeaturesController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/heroic-features',
				],
			],
		],
	],
];
