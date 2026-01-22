<?php
/**
 * P2FormContactSplitImageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FormContactSplitImageAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FormContactSplitImageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FormContactSplitImageAsset',
 */

namespace p2m\sb\assets;

class P2FormContactSplitImageAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/contact-form-split-image';

	public $css = [
		'css/contact-form-split-image.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
