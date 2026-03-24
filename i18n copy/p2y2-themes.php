<?php
/**
 * @package p2made/p2y2-themes
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @package yii2-sb-themes
 * @license MIT
 */

/**
 * @app/i18n/p2y2-themes.php
 */

/**
 * @app/i18n/p2y2-themes.php
 *
 * Driver config for generating demo i18n files for ONE theme per run.
 *
 * Usage (examples):
 *   P2M_THEME=agency   php yii message/extract @app/i18n/p2y2-themes.php
 *   P2M_THEME=portfolio php yii message/extract @app/i18n/p2y2-themes.php
 */

$base = require \Yii::getAlias('@vendor/p2made/p2y2-themes/i18n/config.php');

// Pick one theme per run (matches folder + category naming)
$theme = getenv('P2M_THEME') ?: 'agency';

// Basic sanity: keep it conservative
if (!preg_match('/^[a-z0-9-]+$/', $theme)) {
	throw new \yii\base\InvalidArgumentException('Invalid P2M_THEME value.');
}

$category = 'p2m.th.' . $theme;

return array_merge($base, [
	// Write into: vendor/p2made/p2y2-themes/i18n/<theme>/<lang>/<file>
	'messagePath' => \Yii::getAlias('@vendor/p2made/p2y2-themes/i18n/' . $theme),

	// Only extract messages for this theme’s category
	'onlyCategories' => [$category],

	// Demo languages (as you had)
	'languages' => ['ru', 'kk', 'ky', 'tg', 'uz'],
]);
