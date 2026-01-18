<?php
/**
 * P2OnePageWonderAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2OnePageWonderAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2OnePageWonderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2OnePageWonderAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2OnePageWonderAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/one-page-wonder';

	/*
	public $css = [
		'css/one-page-wonder.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/one-page-wonder.min.js',
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
