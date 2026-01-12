<?php
/**
 * P2FormsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2FormsAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FormsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FormsAsset',
 */

namespace p2m\sb\assets;

class P2FormsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/forms';

	/*
	public $css = [
		'css/forms.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/forms.min.js',
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
