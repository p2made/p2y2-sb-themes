<?php
/**
 * Theme config: portfolio
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Portfolio',
	'controllerMap' => [
		'site' => [
			'class' => p2m\th\controllers\P2PortfolioController::class,
		],
	],
	'components' => [
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'' => 'site/index',
				'item-details/<id:\d+>' => 'site/item-details',

				[
					'class' => \p2m\th\components\P2OneBasedPageUrlRule::class,
					'pattern' => '<page:(?:1-column|2-column|3-column|4-column)>/<p:\d+>',
					'route' => 'site/page',
				],
				'<page:(?:1-column|2-column|3-column|4-column)>' => 'site/page',
			],
		],
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/portfolio',
				],
			],
		],
	],
];
