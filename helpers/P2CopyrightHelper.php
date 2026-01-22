<?php
/**
 * P2CopyrightHelper.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\helpers\P2CopyrightHelper
 */

/**
 * TODO
 *
 * refactor for greater flexibility
 * elevate to p2y2-things
 * document API
 */

namespace p2m\sb\helpers;

use Yii;
use yii\bootstrap5\Html;
use p2m\helpers\BI;

class P2CopyrightHelper
{
	/**
	 * Returns a linked copyright statement.
	 *
	 * @return string HTML
	 */
	public static function copyright(): string
	{
		$params = Yii::$app->params['p2ip'];

		$author    = $params['author']    ?? '';
		$year      = $params['copyright'] ?? '';
		$homepage  = $params['homepage']  ?? '#';

		$label = Html::encode($author) . ', ' . Html::encode($year);

		/*
		$label = implode('', [
			BI::i('copyright')->c('danger'),
			' ',
			Html::encode($author),
			', ',
			Html::encode($year),
		]);
		*/

		$link = Html::a($label, $homepage, [
			'class' => 'link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover',
			'rel' => 'noopener noreferrer',
			'target' => '_blank',
		]);

		return BI::i('copyright')->c('danger') . ' ' . $link;
	}

	/**
	 * Returns a license statement (stub).
	 *
	 * @return string HTML
	 */
	public static function license(): string
	{
		// Stub: to be implemented when license text handling is added
		return '';
	}

	public static function c(): string
	{
		return static::copyright();
	}

	public static function l(): string
	{
		return static::license();
	}
}
