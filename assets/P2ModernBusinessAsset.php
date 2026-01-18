<?php
/**
 * P2ModernBusinessAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2ModernBusinessAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2ModernBusinessAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2ModernBusinessAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2ModernBusinessAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/modern-business';

	public $css = [
		'css/modern-business.min.css',
	];

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/modern-business.min.js',
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
