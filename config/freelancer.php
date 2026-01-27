<?php
/**
 * Theme config: freelancer
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Freelancer',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2FreelancerController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/freelancer',
				],
			],
		],
	],
];
