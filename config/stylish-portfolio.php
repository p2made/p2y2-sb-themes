<?php
/**
 * Theme config: stylish-portfolio
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Stylish Portfolio',
	'controllerMap' => [
		'site' => [
			'class' => p2m\sb\controllers\P2StylishPortfolioController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/stylish-portfolio',
				],
			],
		],
	],
];
