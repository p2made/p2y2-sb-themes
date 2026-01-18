<?php
/**
 * P2OneBasedPageUrlRule.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

/**
 * @package p2made/p2y2-sb-themes
 * @class \p2m\sb\components\P2OneBasedPageUrlRule
 */

namespace p2m\sb\components;

use yii\web\UrlRule;

class P2OneBasedPageUrlRule extends UrlRule
{
	// Name of the pagination param in the rule pattern
	public $pageParam = 'p';

	public function parseRequest($manager, $request)
	{
		$result = parent::parseRequest($manager, $request);
		if ($result === false) {
			return false;
		}

		[$route, $params] = $result;

		// If the pattern matched and included the page param, convert 1-based -> 0-based
		if (isset($params[$this->pageParam])) {
			$n = (int)$params[$this->pageParam];
			$params[$this->pageParam] = max(0, $n - 1);
		}

		return [$route, $params];
	}

	public function createUrl($manager, $route, $params)
	{
		// Only adjust when this rule is actually used (route must match the rule's route)
		if ($route === $this->route && isset($params[$this->pageParam])) {
			$params[$this->pageParam] = ((int)$params[$this->pageParam]) + 1;
		}

		return parent::createUrl($manager, $route, $params);
	}
}
