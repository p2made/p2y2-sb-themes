<?php
/**
 * config/_params.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * Theme config: _params (no overrides)
 *
 * Generated 2026-01-18
 */

return [
	// Restore default SiteController (remove controllerMap override)
	'controllerMap' => [
		'site' => null,
	],

	// Remove theming (no pathMap overrides)
	'components' => [
		'view' => [
			'theme' => null,
		],
	],
];
?>
<?php

return [
	'adminEmail' => 'admin@example.com',
];
