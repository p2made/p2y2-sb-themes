<?php
/**
 * P2CreativeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2CreativeAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2CreativeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2CreativeAsset',
 */

namespace p2m\sb\assets;

class P2CreativeAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/creative';

	/*
	public $css = [
		'css/creative.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/creative.min.js',
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
