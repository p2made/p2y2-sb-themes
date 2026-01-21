<?php
/**
 * P2LandingPageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2LandingPageAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2LandingPageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2LandingPageAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

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
