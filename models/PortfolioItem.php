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
use p2m\helpers\Picsum;

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
		$ipsum = self::ipsum();
		$pad   = strlen((string)$items);
		$out   = [];

		for ($item = 1; $item <= $items; $item++)
		{
			$out[] = new self([
				'id'       => $item,
				'title'    => 'Project ' . str_pad((string)$item, $pad, '0', STR_PAD_LEFT),
				'summary'  => $ipsum,
				'imageUrl' => Picsum::s(700, 300, $item),
				'viewUrl'  => 'item-details/' . $item,
			]);
		}

		return $out;
	}

	public static function demoFindOne(int $id, int $items = 50): ?self
	{
		if ($id < 1 || $id > $items) {
			return null;
		}

		$ipsum = self::ipsum();
		$pad = strlen((string)$items);

		return new self([
			'id'       => $id,
			'title'    => 'Project ' . str_pad((string)$id, $pad, '0', STR_PAD_LEFT),
			'summary'  => $ipsum,
				'imageUrl' => Picsum::s(750, 500, $id),
			'viewUrl'  => 'item-details/' . $id,
		]);
	}

	public static function demoRelated(int $id, int $count, int $items = 50): array
	{
		$out = [];

		// Normalise $id into 1..$items just in case.
		$id = (($id - 1) % $items) + 1;

		for ($i = 1; $i <= $count; $i++)
		{
			$rid = (($id - 1 + $i) % $items) + 1; // wrap into 1..$items
			$out[] = self::demoFindOne($rid, $items);
		}

		return array_filter($out);
	}

	protected static function ipsum(): string
	{
		$ipsum = [
			'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate.',
			'Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus.',
			'Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit.',
			'Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo.',
		];

		$index = array_rand($ipsum);

		return $ipsum[$index];
	}
}
