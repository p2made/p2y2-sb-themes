<?php
/**
 * PortfolioItemProvider.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
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
	public static function demoProvider(int $pageSize = 4, int $items = 50, string $pageParam = 'portfolio-page'): ArrayDataProvider
	{
		return new ArrayDataProvider([
			'allModels' => PortfolioItem::demoItems($items),
			'pagination' => [
				'pageSize' => $pageSize,
				'pageParam' => $pageParam,
				'pageSizeParam' => $pageParam . '-size',
			],
			'sort' => [
				'attributes' => ['id', 'title'],
				'defaultOrder' => ['id' => SORT_ASC],
			],
		]);
	}
}
