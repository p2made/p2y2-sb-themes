<?php
/**
 * P2FreelancerAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2FreelancerAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2FreelancerAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2FreelancerAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/freelancer';

	/*
	public $css = [
		'css/freelancer.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/freelancer.min.js',
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
