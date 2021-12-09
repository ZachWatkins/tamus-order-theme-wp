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
return [
	'starter_packs' => [
		'pack-1' => [
			'title'       => __( 'Required Content', 'cla-wsorder' ),
			'description' => __( 'Required plugins, recommended plugins, and required content for the Workstation Ordering Application.', 'cla-wsorder' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/pack-1.jpg',
			'demo_url'    => 'https://github.com/zachwatkins/cla-wsorder/',
			'config'      => [
				'dependencies'     => [
					[
						'name'       => __( 'Workstation Ordering', 'cla-wsorder' ),
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
				'content'          => [
					'homepage'    => [
						'post_title'     => 'Home',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/home.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'page_template'  => 'page-templates/page-home.php',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'order-form'    => [
						'post_title'     => 'Order Form',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/order-form.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'catalog'    => [
						'post_title'     => 'Catalog',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/catalog.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'orders'    => [
						'post_title'     => 'Orders',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/orders.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'my-account'    => [
						'post_title'     => 'My Account',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/my-account.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'my-orders'    => [
						'post_title'     => 'My Orders',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/my-orders.php',
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'political-science'    => [
						'post_title'     => 'Political Science',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'sociology'    => [
						'post_title'     => 'Sociology',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'philosophy-humanities'    => [
						'post_title'     => 'Philosophy & Humanities',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'performance-studies'    => [
						'post_title'     => 'Performance Studies',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'international-studies-department'    => [
						'post_title'     => 'International Studies Department',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'history'    => [
						'post_title'     => 'History',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'hispanic-studies'    => [
						'post_title'     => 'Hispanic Studies',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'english'    => [
						'post_title'     => 'English',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'economics'    => [
						'post_title'     => 'Economics',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'communication'    => [
						'post_title'     => 'Communication',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'anthropology'    => [
						'post_title'     => 'Anthropology',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'psychology'    => [
						'post_title'     => 'Psychology',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
					'deans-office'    => [
						'post_title'     => 'Dean of Liberal Arts',
						'post_content'   => require dirname( __FILE__ ) . '/import/content/department-empty.php',
						'post_type'      => 'department',
						'post_status'    => 'publish',
						'comment_status' => 'closed',
						'ping_status'    => 'closed',
					],
				],
				'navigation_menus' => [
					'primary' => [
						'homepage'   => [
							'title' => 'Home',
						],
						'order-form' => [
							'title' => 'Order Form',
						],
						'catalog' => [
							'title' => 'Catalog',
						],
						'orders' => [
							'title' => 'Orders',
						],
						'my-account' => [
							'title' => 'My Account',
						],
						'my-orders' => [
							'title' => 'My Orders',
						],
					],
				],
				'widgets'          => [],
			],
		],
	],
];
