<?php
/**
 * P2BusinessCasualAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2BusinessCasualAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2BusinessCasualAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2BusinessCasualAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2BusinessCasualAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/business-casual';

	/*
	public $css = [
		'css/business-casual.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/business-casual.min.js',
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
