<?php
/**
 * P2HeaderFooterAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2HeaderFooterAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2HeaderFooterAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2HeaderFooterAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2HeaderFooterAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/header-footer';

	/*
	public $css = [
		'css/header-footer.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/header-footer.min.js',
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
