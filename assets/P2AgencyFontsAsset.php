<?php
/**
 * P2AgencyFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\th\assets\P2AgencyFontsAsset
 */

/**
 * Load this asset with...
 * p2m\th\assets\P2AgencyFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\th\assets\P2AgencyFontsAsset',
 */

namespace p2m\th\assets;

use yii\web\AssetBundle;

class P2AgencyFontsAsset extends AssetBundle
{
	public $sourcePath = null;

	public $baseUrl = 'https://fonts.googleapis.com';

	public $css = [
		'css?family=Montserrat:400,700',
		'css?family=Roboto+Slab:400,100,300,700',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
