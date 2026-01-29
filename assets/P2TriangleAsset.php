<?php
/**
 * P2TriangleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2TriangleAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2TriangleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2TriangleAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2TriangleAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/triangle';

	/*
	public $css = [
		'css/triangle.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/triangle.min.js',
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
