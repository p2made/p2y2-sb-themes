<?php
/**
 * P2ModernBusinessAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2ModernBusinessAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2ModernBusinessAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2ModernBusinessAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2ModernBusinessAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/modern-business';

	public $css = [
		'css/modern-business.min.css',
	];

	/*
	public $js = [
		'js/modern-business.min.js',
	];
	*/

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
