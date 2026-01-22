<?php
/**
 * P2ResumeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2ResumeAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2ResumeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2ResumeAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2ResumeAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/resume';

	/*
	public $css = [
		'css/resume.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/resume.min.js',
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
