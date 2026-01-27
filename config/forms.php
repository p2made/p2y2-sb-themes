<?php
/**
 * Theme config: forms
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Forms',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2FormsController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-themes/views/forms',
				],
			],
		],
	],
];
