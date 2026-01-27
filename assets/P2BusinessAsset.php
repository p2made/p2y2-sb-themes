<?php
/**
 * P2BusinessAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2BusinessAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2BusinessAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2BusinessAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2BusinessAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/business';

	/*
	public $css = [
		'css/business.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/business.min.js',
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
