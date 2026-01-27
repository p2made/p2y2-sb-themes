<?php
/**
 * @p2m/th/config/portfolio.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

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

				// Stylish portfolio (single page)
				'stylish-portfolio' => 'site/stylish-portfolio',

				// Item details
				'item-details/<id:\d+>' => 'site/item-details',

				// Layout pages (pretty paging)
				'<layout:(?:1-column|2-column|3-column|4-column)>/<p:\d+>' => 'site/page',
				'<layout:(?:1-column|2-column|3-column|4-column)>' => 'site/page',
			],
		],
		'view' => [
			'theme' => [
				'pathMap' => [
					// config/ is sibling to views/
					'@app/views' => dirname(__DIR__) . '/views/portfolio',
				],
			],
		],
	],
];
