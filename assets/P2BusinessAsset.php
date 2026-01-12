<?php
/**
 * P2BusinessAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2BusinessAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2BusinessAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2BusinessAsset',
 */

namespace p2m\sb\assets;

class P2BusinessAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/business';

	/*
	public $css = [
		'css/business.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/business.min.js',
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
