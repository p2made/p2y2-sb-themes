<?php
/**
 * P2NewAgeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2NewAgeAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2NewAgeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2NewAgeAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2NewAgeAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/new-age';

	/*
	public $css = [
		'css/new-age.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/new-age.min.js',
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
