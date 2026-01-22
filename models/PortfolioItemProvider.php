<?php
/**
 * PortfolioItemProvider.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\models\PortfolioItemProvider
 */

namespace p2m\sb\models;

use yii\data\ArrayDataProvider;

class PortfolioItemProvider
{
	public static function demoProvider(int $pageSize = 6): ArrayDataProvider
	{
		return new ArrayDataProvider([
			'allModels' => PortfolioItem::demoItems(),
			'pagination' => [
				'pageSize' => $pageSize,
				'pageParam' => 'p',
				'pageSizeParam' => false, // kills &per-page=...
			],
			'sort' => false,
		]);
	}
}
