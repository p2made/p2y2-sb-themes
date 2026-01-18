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
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2GrayscaleAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2GrayscaleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2GrayscaleAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

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
