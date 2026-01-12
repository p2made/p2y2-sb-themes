<?php
/**
 * P2AgencyAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2AgencyAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2AgencyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2AgencyAsset',
 */

namespace p2m\sb\assets;

class P2AgencyAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/agency';

	/*
	public $css = [
		'css/agency.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/agency.min.js',
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
