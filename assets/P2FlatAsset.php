<?php
/**
 * P2FlatAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2FlatAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2FlatAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2FlatAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2FlatAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/flat';

	/*
	public $css = [
		'css/flat.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/flat.min.js',
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
