<?php
/**
 * P2GrayscaleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2GrayscaleAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2GrayscaleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2GrayscaleAsset',
 */

namespace p2m\sb\assets;

class P2GrayscaleAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/grayscale';

	/*
	public $css = [
		'css/grayscale.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/grayscale.min.js',
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
