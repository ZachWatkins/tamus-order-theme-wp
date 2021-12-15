<?php
/**
 * Genesis Sample.
 *
 * Onboarding config to present a choice of starter packs.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Generate department posts.
$departments       = include __DIR__ . '/department/dept-data.php';
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

foreach ( $departments as $department ) {
	$dept_post                               = $dept_post_default;
	$dept_post['post_title']                 = $department['label'];
	$dept_post['meta_input']['abbreviation'] = $department['abbreviation'];
	$dept_posts[]                            = $dept_post;
}

// Declare all posts.
$all_posts = [
	'homepage'   => [
		'post_title'     => 'Home',
		'post_content'   => require dirname( __FILE__ ) . '/import/content/home.php',
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

return [
	'plugins' => [
		[
			'name'       => __( 'Workstation Order', 'cla-wsorder' ),
			'slug'       => 'cla-workstation-order/cla-workstation-order.php',
			'public_url' => 'https://github.com/zachwatkins/cla-workstation-order/',
		],
		[
			'name'       => __( 'Advanced Custom Fields', 'cla-wsorder' ),
			'slug'       => 'advanced-custom-fields/acf.php',
			'public_url' => 'https://wordpress.org/plugins/advanced-custom-fields/',
		],
		[
			'name'       => __( 'Post SMTP', 'cla-wsorder' ),
			'slug'       => 'post-smtp/postman-smtp.php',
			'public_url' => 'https://wordpress.org/plugins/post-smtp/',
		],
		[
			'name'       => __( 'User Switching', 'cla-wsorder' ),
			'slug'       => 'user-switching/user-switching.php',
			'public_url' => 'https://wordpress.org/plugins/user-switching/',
		],
		[
			'name'       => __( 'Simple History', 'cla-wsorder' ),
			'slug'       => 'simple-history/index.php',
			'public_url' => 'https://wordpress.org/plugins/simple-history/',
		],
		[
			'name'       => __( 'Yoast Duplicate Post', 'cla-wsorder' ),
			'slug'       => 'duplicate-post/duplicate-post.php',
			'public_url' => 'https://wordpress.org/plugins/duplicate-post/',
		],
		[
			'name'       => __( 'OneLogin SAML SSO', 'cla-wsorder' ),
			'slug'       => 'onelogin-saml-sso/onelogin_saml.php',
			'public_url' => 'https://wordpress.org/plugins/onelogin-saml-sso/',
		],
	],
	'content'          => $all_posts,
	'navigation_menus' => [
		'primary' => [
			'homepage'   => [
				'title' => 'Home',
			],
		],
	],
	'widgets'          => [],
];
