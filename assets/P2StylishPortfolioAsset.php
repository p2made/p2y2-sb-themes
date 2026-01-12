<?php
/**
 * P2StylishPortfolioAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @class \p2m\sb\assets\P2StylishPortfolioAsset
 * @package p2made/p2y2-sb-themes
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2StylishPortfolioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2StylishPortfolioAsset',
 */

namespace p2m\sb\assets;

class P2StylishPortfolioAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/stylish-portfolio';

	/*
	public $css = [
		'css/stylish-portfolio.min.css',
	];
	*/

	/*
	public $cssOptions = [
	];
	*/

	/*
	public $js = [
		'js/stylish-portfolio.min.js',
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
