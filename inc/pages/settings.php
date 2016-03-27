<?php

	function ph( $what ) {
		global $current_user;
		get_currentuserinfo(); 

		$user = $current_user->user_login;
		$host = parse_url( get_bloginfo( 'wpurl' ), PHP_URL_HOST );
		$password = str_repeat( '&#8226;', 10 );
	
		echo ${$what};
	}

	do_meta_boxes( 'fuse_admin_settings', 'normal', NULL );
	
?>