<?php
/**
 * P2NavigationAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2NavigationAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2NavigationAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2NavigationAsset',
 */

namespace p2m\sb\assets;

class P2NavigationAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/navigation';

	/*
	public $css = [
		'css/navigation.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/navigation.min.js',
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
