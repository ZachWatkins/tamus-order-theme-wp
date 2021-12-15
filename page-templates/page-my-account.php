<?php
/**
 * My Account.
 *
 * This file adds the account management template to the WSOrder Theme.
 *
 * Template Name: My Account
 *
 * @since      1.0.0
 * @package    WSOrder
 * @subpackage Page Templates
 * @author     Zachary Watkins <zwatkins2@tamu.edu>
 * @license    https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link       https://github.com/ZachWatkins/tamus-order/tree/master/page-templates/page-my-account.php
 */

/**
 * Empty the edit link for this page.
 *
 * @return string
 */
function cla_empty_edit_link() {
	return '';
}
add_filter( 'edit_post_link', 'cla_empty_edit_link' );

function cla_add_container_class( $attr ) {
	$attr['class'] .= ' container';
	return $attr;
}
add_filter( 'genesis_attr_content', 'cla_add_container_class' );

/**
 * Registers and enqueues template scripts.
 *
 * @since 1.0.0
 * @return void
 */
function cla_workstation_order_account_scripts() {

	if ( ! is_user_logged_in() ) {
		return;
	}

	wp_register_script(
		'tamus-order-plugin-wp-account-scripts',
		CLA_THEME_DIRURL . '/js/update-account.js',
		array('jquery'),
		filemtime( CLA_THEME_DIRPATH . '/js/update-account.js' ),
		true
	);

	wp_enqueue_script( 'tamus-order-plugin-wp-account-scripts' );
	// Include admin ajax URL and nonce.
	$script_variables = 'var WSOAjax = {"ajaxurl":"'.admin_url('admin-ajax.php').'","nonce":"'.wp_create_nonce('update_account').'"};';

	wp_add_inline_script( 'tamus-order-plugin-wp-account-scripts', $script_variables, 'before' );

}
add_action( 'wp_enqueue_scripts', 'cla_workstation_order_account_scripts', 1 );

function get_department_dropdown() {
	$output                  = '';
	$dept_params             = array(
		'post_type'      => 'department',
		'posts_per_page' => -1,
		'fields'         => 'ids',
	);
	$departments             = get_posts( $dept_params );
	$user_id                 = get_current_user_id();
	$user_department_post_id = (int) get_user_meta( $user_id, 'department', true );
	if ( is_array( $departments ) ) {
		$output .= '<select id="cla_department" name="cla_department"><option value="0">None</option>';
		foreach ( $departments as $dept_id ) {
			$title    = get_the_title( $dept_id );
			$selected = '';
			if ( $user_department_post_id === $dept_id ) {
				$selected = ' selected';
			}
			$output .= "<option value=\"$dept_id\"$selected>$title</option>";
		}
		$output .= "</select>";
	}
	return $output;
}

add_action( 'the_content', 'cla_my_account' );
function cla_my_account() {

	if ( ! is_user_logged_in() ) {
		return;
	}

	$permalink     = get_permalink();
	$output        = "<form method=\"post\" enctype=\"multipart/form-data\" id=\"cla_update_account_form\" action=\"{$permalink}\">";
	$user          = wp_get_current_user();
	$user_meta     = get_user_meta( $user->ID );
	$username      = $user->user_login;
	$firstname     = $user_meta['first_name'][0];
	$lastname      = $user_meta['last_name'][0];
	$email         = $user->user_email;
	$department_dd = get_department_dropdown();
	$output        .= "<div class=\"grid-x p align-middle grid-margin-x\"><div class=\"cell small-2\"><span>Username</span></div><div class=\"cell small-10\"><span class=\"text-input\">$username</span></div></div>";
	$output        .= "<div class=\"grid-x p align-middle grid-margin-x\"><div class=\"cell small-2\"><label for=\"cla_first_name\">First Name</label></div><div class=\"cell small-10\"><input type=\"text\" value=\"$firstname\" name=\"cla_first_name\" id=\"cla_first_name\" /></div></div>";
	$output        .= "<div class=\"grid-x p align-middle grid-margin-x\"><div class=\"cell small-2\"><label for=\"cla_last_name\">Last Name</label></div><div class=\"cell small-10\"><input type=\"text\" value=\"$lastname\" name=\"cla_last_name\" id=\"cla_last_name\" /></div></div>";
	$output        .= "<div class=\"grid-x p align-middle grid-margin-x\"><div class=\"cell small-2\"><label for=\"cla_email\">Email</label></div><div class=\"cell small-10\"><input type=\"text\" value=\"$email\" name=\"cla_email\" id=\"cla_email\" /></div></div>";
	$output        .= "<div class=\"grid-x p align-middle grid-margin-x\"><div class=\"cell small-2\"><label for=\"cla_department\">Department</label></div><div class=\"cell small-10\">$department_dd</div></div>";
	$output        .= "<hr />";
	$output        .= "<div class=\"grid-x align-middle grid-margin-x\"><div class=\"cell auto text-right\"><div class=\"ajax-response\"></div></div><div class=\"cell shrink\"><button type=\"button\" name=\"cla_update_account\" id=\"cla_update_account\" class=\"btn btn-primary\">Looks Good <span class=\"dashicons dashicons-thumbs-up\"></span></button></div></div>";
	$output        .= "</form>";
	echo $output;
}

genesis();
