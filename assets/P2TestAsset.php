<?php
/**
 * P2TestAsset.php
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
 * @package p2made/p2y2-themes
 * @class \p2m\th\assets\P2TestAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2TestAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2TestAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2TestAsset extends AssetBundle
{
	public $sourcePath = '@p2m/th/assets/lib/test';

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
