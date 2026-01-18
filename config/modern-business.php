<?php
/**
 * Theme config: modern-business
 *
 * Generated 2026-01-12
 */

return [
	'name' => 'P2SB Theme – Modern Business',
	'controllerMap' => [
		'site' => [
			'class' => p2m\sb\controllers\P2ModernBusinessController::class,
		],
	],
	'components' => [
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'' => 'site/index',

				// Common site pages (no /site prefix)
				'about' => 'site/about',
				'contact' => 'site/contact',
				'pricing' => 'site/pricing',
				'faq' => 'site/faq',

				// Auth / account
				'login' => 'site/login',
				'logout' => 'site/logout',
				'signup' => 'site/signup',

				'request-password-reset' => 'site/request-password-reset',
				'reset-password/<token:[A-Za-z0-9\-_]+>' => 'site/reset-password',

				'verify-email/<token:[A-Za-z0-9\-_]+>' => 'site/verify-email',
				'resend-verification-email' => 'site/resend-verification-email',

				// Theme sections
				'blog' => 'blog/index',
				'blog/post' => 'blog/post',

				'portfolio' => 'portfolio/index',
				'portfolio/item' => 'portfolio/item',
			],
		],
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/p2y2-sb-themes/views/modern-business',
				],
			],
		],
	],
];
