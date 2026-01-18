<?php
/**
 * P2ComingSoonAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2ComingSoonAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2ComingSoonAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2ComingSoonAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2ComingSoonAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/coming-soon';

	/*
	public $css = [
		'css/coming-soon.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/coming-soon.min.js',
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
