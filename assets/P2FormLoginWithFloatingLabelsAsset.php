<?php
/**
 * P2FormLoginWithFloatingLabelsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2FormLoginWithFloatingLabelsAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2FormLoginWithFloatingLabelsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2FormLoginWithFloatingLabelsAsset',
 */

namespace p2m\th\assets;

class P2FormLoginWithFloatingLabelsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/login-form-with-floating-labels';

	public $css = [
		'css/login-form-with-floating-labels.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
