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
		'demo-1' => [
			'title'       => __( 'Demo 1', 'tamus-order-theme-wp' ),
			'description' => __( 'Demonstration content for the application.', 'tamus-order-theme-wp' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/demo-1.jpg',
			'demo_url'    => 'https://github.com/zachwatkins/tamus-order-theme-wp/',
			'config'      => [
				'dependencies' => [
					[
						'name'       => __( 'Workstation Order', 'tamus-order-theme-wp' ),
						'slug'       => 'tamus-order-plugin-wp/tamus-order-plugin-wp.php',
						'public_url' => 'https://github.com/zachwatkins/tamus-order-plugin-wp/',
					],
					[
						'name'       => __( 'Advanced Custom Fields', 'tamus-order-theme-wp' ),
						'slug'       => 'advanced-custom-fields/acf.php',
						'public_url' => 'https://wordpress.org/plugins/advanced-custom-fields/',
					],
					[
						'name'       => __( 'Post SMTP', 'tamus-order-theme-wp' ),
						'slug'       => 'post-smtp/postman-smtp.php',
						'public_url' => 'https://wordpress.org/plugins/post-smtp/',
					],
					[
						'name'       => __( 'User Switching', 'tamus-order-theme-wp' ),
						'slug'       => 'user-switching/user-switching.php',
						'public_url' => 'https://wordpress.org/plugins/user-switching/',
					],
					[
						'name'       => __( 'Simple History', 'tamus-order-theme-wp' ),
						'slug'       => 'simple-history/index.php',
						'public_url' => 'https://wordpress.org/plugins/simple-history/',
					],
					[
						'name'       => __( 'Yoast Duplicate Post', 'tamus-order-theme-wp' ),
						'slug'       => 'duplicate-post/duplicate-post.php',
						'public_url' => 'https://wordpress.org/plugins/duplicate-post/',
					],
					[
						'name'       => __( 'OneLogin SAML SSO', 'tamus-order-theme-wp' ),
						'slug'       => 'onelogin-saml-sso/onelogin_saml.php',
						'public_url' => 'https://wordpress.org/plugins/onelogin-saml-sso/',
					],
				],
				'content'          => require __DIR__ . '/import/content/posts.php',
				'navigation_menus' => [
					'primary' => [
						'homepage'   => [
							'title' => 'Home',
						],
					],
				],
				'widgets'          => [],
			],
		],
	],
];
