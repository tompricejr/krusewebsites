<?php
/**
 * Site URL Rules
 *
 * You can define custom site URL rules here, which Craft will check in addition
 * to any routes you’ve defined in Settings → Routes.
 *
 * See http://www.yiiframework.com/doc-2.0/guide-runtime-routing.html for more
 * info about URL rules.
 *
 * In addition to Yii’s supported syntaxes, Craft supports a shortcut syntax for
 * defining template routes:
 *
 *     'blog/archive/<year:\d{4}>' => ['template' => 'blog/_archive'],
 *
 * That example would match URIs such as `/blog/archive/2012`, and pass the
 * request along to the `blog/_archive` template, providing it a `year` variable
 * set to the value `2012`.
 */

// return [
// 	'products/all' => 			['template' => 'product-overview.twig'],
// ];

return [
	'products/<category:[a-zA-Z0-9-]+>' =>						['template' => 'product-overview.twig'],
	'products/all' => 											['template' => 'product-overview.twig'],
	'products/<category:[a-zA-Z0-9-]+>/<slug:[a-zA-Z0-9-]+>' => ['template' => 'product-detail.twig'],
];
