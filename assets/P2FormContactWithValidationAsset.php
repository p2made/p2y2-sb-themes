<?php
/**
 * P2FormContactWithValidationAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FormContactWithValidationAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FormContactWithValidationAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FormContactWithValidationAsset',
 */

namespace p2m\sb\assets;

class P2FormContactWithValidationAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/contact-form-with-validation';

	public $css = [
		'css/contact-form-with-validation.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
