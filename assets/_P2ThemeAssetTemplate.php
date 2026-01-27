<?php
/**
 * _P2ThemeAssetTemplate.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\_P2ThemeAssetTemplate
 */

/**
 * Load this asset with...
 * p2m\th\assets\_P2ThemeAssetTemplate::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\_P2ThemeAssetTemplate',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class _P2ThemeAssetTemplate extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/_theme_name_';

	/*
	public $css = [
		'css/_theme_name_.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/_theme_name_.min.js',
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
