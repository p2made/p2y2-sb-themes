<?php
/**
 * P2AgencyAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\P2AgencyAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\P2AgencyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\P2AgencyAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class P2AgencyAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/agency';

	public $css = [
		'css/agency.min.css',
	];

	public $js = [
		'js/agency.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
