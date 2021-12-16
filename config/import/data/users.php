<?php

$users = array(
	'wso-admin'           => 'wso_admin',
	'logistics-admin'     => 'logistics_admin',
	'logistics-assistant' => 'logistics_assistant',
	'business-admin'      => 'business_admin',
	'it-rep'              => 'it_rep',
	'jane-doe'            => 'subscriber',
	'john-doe'            => 'subscriber',
);

foreach ( $users as $user => $role ) {
	
	$full_name = ucwords( str_replace( '-', ' ', $user ) );
	$name_arr  = explode( ' ', $full_name );
	$email     = $user . '@' . $_SERVER['HTTP_HOST'];
	
	// If the user to be added has a role already assigned to an active user,
	// then skip this user.
	$test_role = get_users( array( 'role__in' => array( $role ) ) );
	if ( ! empty( $test_role ) ) {
		continue;
	}

	$userdata = array(
		'user_pass'     => wp_generate_password( 24 ),
		'user_login'    => $user,
		'user_nicename' => $user,
		'user_email'    => $email,
		'display_name'  => $full_name,
		'nickname'      => $full_name,
		'first_name'    => $name_arr[0],
		'last_name'     => 1 < count( $name_arr ) ? $name_arr[1] : '',
		'role'          => $role
	);

	wp_insert_user( wp_slash( $userdata ) );

}
