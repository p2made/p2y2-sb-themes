<?php
/**
 * P2HeroicFeaturesAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2HeroicFeaturesAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2HeroicFeaturesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2HeroicFeaturesAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2HeroicFeaturesAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/heroic-features';

	/*
	public $css = [
		'css/heroic-features.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/heroic-features.min.js',
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
