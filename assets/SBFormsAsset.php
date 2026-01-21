<?php
/**
 * SBFormsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\assets\SBFormsAsset
 */

/**
 * Load this asset with...
 * p2m\sb\assets\SBFormsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sb\assets\SBFormsAsset',
 */

namespace p2m\sb\assets;

use yii\web\AssetBundle;

class SBFormsAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb/assets/lib/sb-forms';

	public $js = [
		'js/sb-forms-0.4.1.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
