<?php
/**
 * P2StylishPortfolioAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2StylishPortfolioAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2StylishPortfolioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2StylishPortfolioAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2StylishPortfolioAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/stylish-portfolio';

	public $css = [
		'css/stylish-portfolio.min.css',
	];

	public $js = [
		'js/stylish-portfolio.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
