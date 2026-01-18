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
			'class' => p2m\sb\controllers\P2HeroicFeaturesController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/heroic-features',
				],
			],
		],
	],
];
