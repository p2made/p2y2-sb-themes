<?php
/**
 * P2BusinessFrontpageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2BusinessFrontpageAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2BusinessFrontpageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2BusinessFrontpageAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2BusinessFrontpageAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/business-frontpage';

	/*
	public $css = [
		'css/business-frontpage.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/business-frontpage.min.js',
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
