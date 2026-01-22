<?php
/**
 * P2NavigationAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2NavigationAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2NavigationAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2NavigationAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

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
