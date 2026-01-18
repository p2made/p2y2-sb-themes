<?php
/**
 * P2SBThemesDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2SBThemesDemoAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2SBThemesDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2SBThemesDemoAsset',
 */

namespace p2m\sb\assets;

class P2SBThemesDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/p2sb-themes-demo';

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
