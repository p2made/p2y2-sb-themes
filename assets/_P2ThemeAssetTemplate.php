<?php
/**
 * _P2ThemeAssetTemplate.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\_P2ThemeAssetTemplate
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\_P2ThemeAssetTemplate::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\_P2ThemeAssetTemplate',
 */

namespace p2m\sb\assets;

class _P2ThemeAssetTemplate extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/_theme_name_';

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
