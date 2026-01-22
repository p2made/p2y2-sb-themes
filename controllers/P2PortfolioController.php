<?php
/**
 * P2PortfolioController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
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
use yii\web\NotFoundHttpException;
use p2m\sb\models\PortfolioItem;
use p2m\sb\models\PortfolioItemProvider;
use p2m\sb\assets\P2PortfolioDemoAsset;
use p2m\sb\assets\P2StylishPortfolioAsset;

use yii\data\Pagination;

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

		$bundle = P2PortfolioDemoAsset::register($this->view);
		$this->view->params['p2mThemeAssetUrl'] = $bundle->baseUrl;

		return $this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}

	public function actionPage(string $layout)
	{
		$allowed = [
			'1-column',
			'2-column',
			'3-column',
			'4-column',
		];

		$layoutSizes = [
			'1-column' => 4,
			'2-column' => 6,
			'3-column' => 6,
			'4-column' => 12,
		];

		if (!in_array($layout, $allowed, true))
		{
			throw new NotFoundHttpException('Page not found.');
		}

		$dataProvider = PortfolioItemProvider::demoProvider($layoutSizes[$layout]);

		return $this->render($layout, [
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

		$related = PortfolioItem::demoRelated($id, 4, 50);

		return $this->render('item-details', [
			'model'   => $model,
			'related'=> $related,
		]);
	}

	public function actionStylishPortfolio()
	{
		$this->layout = '@p2m/sb/views/portfolio/layouts/stylish';

		$bundle = P2StylishPortfolioAsset::register($this->view);
		$this->view->params['p2mThemeAssetUrl'] = $bundle->baseUrl;

		return $this->render('stylish-portfolio');
	}
}
