<?php
/**
 * Theme config: clean-blog
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Clean Blog',
	'controllerMap' => [
		'site' => [
			'class' => p2m\sb\controllers\P2CleanBlogController::class,
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
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/clean-blog',
				],
			],
		],
	],
];
