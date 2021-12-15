<?php
/**
 * TAMUS Ordering Application theme settings.
 *
 * Genesis 2.9+ updates these settings when themes are activated.
 *
 * @package TAMUS Workstation Order
 * @author  Zachary K. Watkins <zwatkins2@tamu.edu> (https://github.com/zachwatkins/)
 * @license GPL-2.0-or-later
 * @link    https://github.com/zachwatkins/tamus-order-theme-wp/
 */

return [
	GENESIS_SETTINGS_FIELD                => [
		'site_layout' => 'full',
		'footer_text' => '[footer_copyright before="Copyright "] · TAMUS Ordering Application <a href="https://github.com/zachwatkins/tamus-order">Theme</a> and <a href="https://github.com/zachwatkins/tamus-order-plugin-wp">Plugin</a> on [footer_genesis_link url="https://www.studiopress.com/" before=""] · [footer_wordpress_link]'
	],
	'posts_per_page'                      => 6,
	'blogdescription'                     => '',
	'blogname'                            => 'TAMUS Ordering Application',
	'auto_update_core_dev'                => 'enabled',
	'auto_update_core_minor'              => 'enabled',
	'options_current_program'             => '2',
	'_options_current_program'            => 'field_60099c44333b3',
	'options_unfunded_program'            => '3',
	'_options_unfunded_program'           => 'field_60bf90684b119',
	'options_logistics_email'             => 'logistics-admin@wso.local',
	'_options_logistics_email'            => 'field_601da56c35bfe',
	'options_enable_emails_to_logistics'  => '1',
	'_options_enable_emails_to_logistics' => 'field_601da63a35bff',
	'duplicate_post_types_enabled'        => 'a:4:{i:0;s:7:"product";i:1;s:6:"bundle";i:2;s:7:"program";i:3;s:10:"department";}',
	'duplicate_post_roles'                => 'a:4:{i:0;s:13:"administrator";i:1;s:9:"wso_admin";i:2;s:13:"logistics";i:3;s:19:"logistics_admin";}',
];
