<?php
/**
 * P2PortfolioDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####             DEMO ASSET ONLY!              ##### ^ #####
 * ##### ^ #####        THIS ASSET IS ONLY USED BY         ##### ^ #####
 * ##### ^ #####         THE DEMO. YOU SHOULD NOT          ##### ^ #####
 * ##### ^ #####         NEED IT IN YOUR OWN WORK.         ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2PortfolioDemoAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2PortfolioDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2PortfolioDemoAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2PortfolioDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/portfolio';

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
