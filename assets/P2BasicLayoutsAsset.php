<?php
/**
 * P2BasicLayoutsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2BasicLayoutsAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2BasicLayoutsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2BasicLayoutsAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2BasicLayoutsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/basic-layouts';

	/*
	public $css = [
		'css/basic-layouts.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/basic-layouts.min.js',
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
