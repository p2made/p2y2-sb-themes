<?php
/**
 * P2FormRegistrationWithFloatingLabelsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FormRegistrationWithFloatingLabelsAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FormRegistrationWithFloatingLabelsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FormRegistrationWithFloatingLabelsAsset',
 */

namespace p2m\sb\assets;

class P2FormRegistrationWithFloatingLabelsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/registration-page-with-floating-labels';

	public $css = [
		'css/registration-page-with-floating-labels.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
