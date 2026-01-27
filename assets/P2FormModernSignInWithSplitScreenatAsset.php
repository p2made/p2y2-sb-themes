<?php
/**
 * P2FormModernSignInWithSplitScreenatAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2FormModernSignInWithSplitScreenatAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2FormModernSignInWithSplitScreenatAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2FormModernSignInWithSplitScreenatAsset',
 */

namespace p2m\th\assets;

class P2FormModernSignInWithSplitScreenatAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/modern-sign-in-page-with-split-screen-format';

	public $css = [
		'css/modern-sign-in-page-with-split-screen-format.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
