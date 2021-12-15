<?php

// Generate department posts.
$departments       = require dirname( __FILE__, 2 ) . '/data/departments.php';
$dept_posts        = array();
$dept_post_default = [
	'post_title'     => 'Political Science',
	'post_content'   => '',
	'post_type'      => 'department',
	'post_status'    => 'publish',
	'comment_status' => 'closed',
	'ping_status'    => 'closed',
	'meta_input'     => [
		'abbreviation'  => 'POLS',
		'_abbreviation' => 'field_6000774e10970',
	],
];

foreach ( $departments as $key => $department ) {
	$dept_posts[ $key ]                               = $dept_post_default;
	$dept_posts[ $key ]['post_title']                 = $department['label'];
	$dept_posts[ $key ]['meta_input']['abbreviation'] = $department['abbreviation'];
}

// Declare all posts.
return [
	'homepage'   => [
		'post_title'     => 'Home',
		'post_content'   => require dirname( __FILE__ ) . '/home.php',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'page_template'  => 'page-templates/page-home.php',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
	],
	'example-program' => [
		'post_title'     => 'Staff 2022',
		'post_content'   => '',
		'post_type'      => 'program',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'prefix'       => 'S-FY22',
			'_prefix'      => 'field_5fff77faa4987',
			'allocation'   => '1500',
			'_allocation'  => 'field_5fff7813a4988',
			'threshold'    => '1505',
			'_threshold'   => 'field_5fff781da4989',
			'fiscal_year'  => '2022',
			'_fiscal_year' => 'field_6006f98dc985f',
		]
	],
	'self-funded-program' => [
		'post_title'     => 'Self-funded 2022',
		'post_content'   => '',
		'post_type'      => 'program',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'prefix'       => 'SF-FY22',
			'_prefix'      => 'field_5fff77faa4987',
			'allocation'   => '0',
			'_allocation'  => 'field_5fff7813a4988',
			'threshold'    => '0',
			'_threshold'   => 'field_5fff781da4989',
			'fiscal_year'  => '2022',
			'_fiscal_year' => 'field_6006f98dc985f',
		]
	],
	'order-form' => [
		'post_title'     => 'Order Form',
		'post_content'   => '',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'_wp_page_template' => 'order-form-template.php',
		],
	],
	'catalog'    => [
		'post_title'     => 'Catalog',
		'post_content'   => '',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'_wp_page_template' => 'catalog.php',
		],
	],
	'orders'     => [
		'post_title'     => 'Orders',
		'post_content'   => '',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'_wp_page_template' => 'orders.php',
		],
	],
	'my-account' => [
		'post_title'     => 'My Account',
		'post_content'   => '',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'_wp_page_template' => 'my-account.php',
		],
	],
	'my-orders'  => [
		'post_title'     => 'My Orders',
		'post_content'   => '',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
		'meta_input'     => [
			'_wp_page_template' => 'my-orders.php',
		],
	],
];
