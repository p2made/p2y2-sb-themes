<?php
/**
 * P2LandingPageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2LandingPageAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2LandingPageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2LandingPageAsset',
 */

namespace p2m\sb\assets;

class P2LandingPageAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/landing-page';

	/*
	public $css = [
		'css/landing-page.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/landing-page.min.js',
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
