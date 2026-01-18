<?php
/**
 * P2FullAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FullAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FullAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FullAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2FullAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/full';

	/*
	public $css = [
		'css/full.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/full.min.js',
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
