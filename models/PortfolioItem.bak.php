<?php
/**
 * PortfolioItem.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\models\PortfolioItem
 */

namespace p2m\sb\models;

use yii\base\Model;

class PortfolioItem extends Model
{
	public int $id;
	public string $title;
	public string $summary;
	public string $imageUrl;
	public ?string $viewUrl = null;

	public function rules(): array
	{
		return [
			[['id', 'title', 'summary', 'imageUrl'], 'required'],
			[['id'], 'integer'],
			[['title'], 'string', 'max' => 255],
			[['summary'], 'string'],
			[['imageUrl', 'viewUrl'], 'string', 'max' => 2048],
		];
	}

	/**
	 * Demo dataset (replace with DB later).
	 *
	 * @return self[]
	 */
	public static function demoItems(int $items = 50): array
	{
		$ipsum = [
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?',
		];

		$results = [];

		// Width for zero-padding based on item count (minimum fixed length)
		$padWidth = strlen((string)$items);

		for ($item = 1; $item <= $items; $item++)
		{
			$results[] = new self([
				'id' => $item,
				'title' => 'Project ' . str_pad((string)$item, $padWidth, '0', STR_PAD_LEFT),
				'summary' => $ipsum[$item % count($ipsum)],
				'imageUrl' => 'https://picsum.photos/seed/' . $item . '/700/300',
				'viewUrl' => 'item-details/' . $item,
			]);
		}

		return $results;
	}

	public static function demoFindOne(int $id, int $items = 50): ?self
	{
		if ($id < 1 || $id > $items)
		{
			return null;
		}

		// Avoid generating the whole array just to fetch one item.
		$ipsum = [
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!',
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?',
		];

		$padWidth = strlen((string)$items);

		return new self([
			'id' => $id,
			'title' => 'Project ' . str_pad((string)$id, $padWidth, '0', STR_PAD_LEFT),
			'summary' => $ipsum[array_rand($ipsum)],
			'imageUrl' => 'https://picsum.photos/seed/' . $id . '/750/500',
			'viewUrl' => 'item-details/' . $id,
		]);
	}
}
