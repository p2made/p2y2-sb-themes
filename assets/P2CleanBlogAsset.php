<?php
/**
 * P2CleanBlogAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2CleanBlogAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2CleanBlogAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2CleanBlogAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2CleanBlogAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/clean-blog';

	/*
	public $css = [
		'css/clean-blog.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/clean-blog.min.js',
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
