<?php
/**
 * P2BlogAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2BlogAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2BlogAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2BlogAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2BlogAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/blog';

	/*
	public $css = [
		'css/blog.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/blog.min.js',
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
