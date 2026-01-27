<?php
/**
 * @app/i18n/config.php
 */

$base = require Yii::getAlias('@vendor/p2made/p2y2-themes/i18n/config.php');

return array_merge($base, [
	'messagePath' => __DIR__ . '/messages',
	'languages'      => ['ru', 'kk', 'ky', 'tg', 'uz'],
]);
