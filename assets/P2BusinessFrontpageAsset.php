<?php
/**
 * P2BusinessFrontpageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2BusinessFrontpageAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2BusinessFrontpageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2BusinessFrontpageAsset',
 */

namespace p2m\sb\assets;

class P2BusinessFrontpageAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/business-frontpage';

	/*
	public $css = [
		'css/business-frontpage.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/business-frontpage.min.js',
	];
	*/

	/*
	public $jsOptions = [
	];
	*/

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
