<?php
/**
 * demo/data/p2-agency-data.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2026
 * @link https://github.com/p2made
 * @license MIT
 */

use p2m\helpers\BI;

return [
	'masthead' => [
		'titleId' => 'masthead-title',
		'kicker'  => 'Welcome To Our Studio!',
		'title'   => 'It’s Nice To Meet You',
		'cta'     => 'Tell Me More',
	],
	'services' => [
		'titleId'    => 'services-title',
		'heading'    => 'Services',
		'subheading' => 'Lorem ipsum dolor sit amet consectetur.',
		'items' => [
			[
				'icon' => BI::_CART3,      // was fa-shopping-cart
				'title' => 'E-Commerce',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
			],
			[
				'icon' => BI::_LAPTOP,     // was fa-laptop
				'title' => 'Responsive Design',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
			],
			[
				'icon' => BI::_SHIELD_LOCK, // was fa-lock (closest “security” vibe)
				'title' => 'Web Security',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
			],
		],
	],
	'portfolio' => [
		'titleId'    => 'portfolio-title',
		'heading'    => 'Portfolio',
		'subheading' => 'Lorem ipsum dolor sit amet consectetur.',
		'items' => [
			[
				'id' => 1,
				'title'    => 'Threads',
				'subtitle' => 'Illustration',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/1.jpg',
				'alt'      => 'Portfolio item: Threads',
				'client'   => 'Threads',
				'category' => 'Illustration',
			],
			[
				'id' => 2,
				'title'    => 'Explore',
				'subtitle' => 'Graphic Design',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/2.jpg',
				'alt'      => 'Portfolio item: Explore',
				'client'   => 'Explore',
				'category' => 'Graphic Design',
			],
			[
				'id' => 3,
				'title'    => 'Finish',
				'subtitle' => 'Identity',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/3.jpg',
				'alt'      => 'Portfolio item: Finish',
				'client'   => 'Finish',
				'category' => 'Identity',
			],
			[
				'id' => 4,
				'title'    => 'Lines',
				'subtitle' => 'Branding',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/4.jpg',
				'alt'      => 'Portfolio item: Lines',
				'client'   => 'Lines',
				'category' => 'Branding',
			],
			[
				'id' => 5,
				'title'    => 'Southwest',
				'subtitle' => 'Website Design',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/5.jpg',
				'alt'      => 'Portfolio item: Southwest',
				'client'   => 'Southwest',
				'category' => 'Website Design',
			],
			[
				'id' => 6,
				'title'    => 'Window',
				'subtitle' => 'Photography',
				'intro'    => 'Lorem ipsum dolor sit amet consectetur.',
				'image'    => '/img/portfolio/6.jpg',
				'alt'      => 'Portfolio item: Window',
				'client'   => 'Window',
				'category' => 'Photography',
			],
		],
	],
];
