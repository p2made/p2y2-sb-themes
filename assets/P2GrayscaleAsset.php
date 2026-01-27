<?php
/**
 * P2GrayscaleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2GrayscaleAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2GrayscaleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2GrayscaleAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2GrayscaleAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/grayscale';

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
