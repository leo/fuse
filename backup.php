<?php
	
	$type = $_GET['type'];
	
	$allowed_types = array(
		'create', 'remove', 'load'
	);
	
	if( in_array( $type, $allowed_types ) ) {
		
		require_once( 'lib/class.backup.php' );
		
		$backup = new backup();
		echo $backup->$type();
		
	} else {
		
		exit( 'Type not allowed.' );
		
	}
	
	
?>