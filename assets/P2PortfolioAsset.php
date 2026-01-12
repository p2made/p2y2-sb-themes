<?php
/**
 * P2PortfolioAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2PortfolioAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2PortfolioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2PortfolioAsset',
 */

namespace p2m\sb\assets;

class P2PortfolioAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/portfolio';

	/*
	public $css = [
		'css/portfolio.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/portfolio.min.js',
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
