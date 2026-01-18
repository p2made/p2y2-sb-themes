<?php
/**
 * P2FormModernSignInWithSplitScreenatAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FormModernSignInWithSplitScreenatAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FormModernSignInWithSplitScreenatAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FormModernSignInWithSplitScreenatAsset',
 */

namespace p2m\sb\assets;

class P2FormModernSignInWithSplitScreenatAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/modern-sign-in-page-with-split-screen-format';

	public $css = [
		'css/modern-sign-in-page-with-split-screen-format.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
