<?php
/**
 * Theme config: landing-page
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Landing Page',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2LandingPageController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/landing-page',
				],
			],
		],
	],
];
