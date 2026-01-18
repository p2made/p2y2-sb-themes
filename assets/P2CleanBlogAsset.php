<?php
/**
 * P2CleanBlogAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2CleanBlogAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2CleanBlogAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2CleanBlogAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2CleanBlogAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/clean-blog';

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
