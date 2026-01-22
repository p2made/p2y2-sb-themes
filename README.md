# P2 Start Bootstrap Themes 5.0.0

[![License](https://poser.pugx.org/p2made/p2y2-startbootstrap-themes/license)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Total Downloads](https://poser.pugx.org/p2made/p2y2-startbootstrap-themes/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Monthly Downloads](https://poser.pugx.org/p2made/p2y2-startbootstrap-themes/d/monthly)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/p2y2-startbootstrap-themes/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Latest Unstable Version](https://poser.pugx.org/p2made/p2y2-startbootstrap-themes/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)

---

Themes from [Start Bootstrap](https://startbootstrap.com) as a UIs for [Yii 2](http://www.yiiframework.com/) Framework.

These themes contain [AssetBundles](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html),  [Views](http://www.yiiframework.com/doc-2.0/guide-structure-views.html), and [Widgets](http://www.yiiframework.com/doc-2.0/guide-structure-widgets.html) to render the Start Bootstrap themes as Yii 2 themes.

P2 Start Bootstrap Themes declares [`p2made/yii2-p2y2-things`](https://github.com/p2made/yii2-p2y2-things) and [`p2made/yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) as dependancies.

¡¡ IMPORTANT !!
===============

Version 2.0.0 of all my Yii2 add-ons marks a breaking change where I've shortened my namespaces.
`p2made\rest\of\namespace` is now `p2m\rest\of\namespace`.

Installation
------------

The preferred way to install P2 Start Bootstrap Themes is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require --prefer-dist p2made/p2y2-startbootstrap-themes "dev-5.0.0-dev"
```

or

```
php composer.phar require --prefer-dist p2made/p2y2-startbootstrap-themes "dev-5.0.0-dev"
```

Alternatively add:

```
		"p2made/p2y2-startbootstrap-themes": "dev-5.0.0-dev"
```

to the requires section of your `composer.json` file & P2 Start Bootstrap Themes will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component with *one* of `@app/views` lines:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/agency',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/business-casual',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/business-frontpage',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/creative',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/freelancer',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/grayscale',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/heroic-features',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/landing-page',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/modern-business',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/new-age',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/one-page-wonder',
					'@app/views' => '@vendor/p2made/p2y2-startbootstrap-themes/views/stylish-portfolio',
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `views/`), they are **not meant to be customized directly in the `vendor/` folder**. If you do that, your changes will be lost next time you run `composer update`.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

```php
	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}
```

P2 Start Bootstrap Themes uses [P2Y2Things](https://github.com/p2made/yii2-p2y2-things) which requires some Yii 2 assets to be nullified to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		...
	],
```

Customization
-------------

- Copy files from `vendor/p2made/p2y2-startbootstrap-themes/views-preview/_your_choice_of_theme_` to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to the example views.

