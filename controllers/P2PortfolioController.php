<?php
/**
 * P2PortfolioController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\controllers\P2PortfolioController
 */

namespace p2m\sb\controllers;

use Yii;
use yii\web\Controller;

use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;

use yii\data\Pagination;
use yii\web\NotFoundHttpException;

use p2m\sb\models\PortfolioItem;
use p2m\sb\models\PortfolioItemProvider;

/**
 * Site controller
 */
class P2PortfolioController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => \yii\web\ErrorAction::class,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return mixed
	 */
	public function actionIndex()
	{
		$dataProvider = PortfolioItemProvider::demoProvider(4);

		return $this->render('index', [
			'dataProvider' => $dataProvider,
		]);

		/**
		return $this->render('index');
		 */
	}

	public function actionPage(string $page, int $p = 0)
	{
		$allowed = ['1-column', '2-column', '3-column', '4-column'];

		if (!in_array($page, $allowed, true))
		{
			throw new NotFoundHttpException('Page not found.');
		}

		$pageSizes = [
			'1-column' => 4,
			'2-column' => 6,
			'3-column' => 6,
			'4-column' => 8,
		];

		$pageSize = $pageSizes[$page] ?? 6;

		$dataProvider = PortfolioItemProvider::demoProvider($pageSize, 50);

		$pagination = $dataProvider->getPagination();
		$pagination->pageParam = 'p';
		$pagination->pageSizeParam = false;

		// Base params needed for pager link generation
		$pagination->params = [
			'page' => $page,
		];

		return $this->render($page, [
			'dataProvider' => $dataProvider,
		]);
	}

	public function actionItemDetails(int $id)
	{
		$model = PortfolioItem::demoFindOne($id, 50);

		if ($model === null)
		{
			throw new NotFoundHttpException('Item not found.');
		}

		// Simple related set (pick a few nearby IDs)
		$related = [];
		foreach ([$id + 1, $id + 2, $id + 3, $id + 4] as $rid)
		{
			$r = PortfolioItem::demoFindOne($rid, 50);
			if ($r !== null)
			{
				$related[] = $r;
			}
		}

		return $this->render('item-details', [
			'model' => $model,
			'related' => $related,
		]);
	}
}

