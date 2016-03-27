<?php
	
	class backup {
	
		public function create() {

			$wp_root = str_replace( '/wp-content/plugins/fuse', '', dirname( __FILE__ ) );
			$wp_files = array();

			$fileinfos = new RecursiveIteratorIterator(
			    new RecursiveDirectoryIterator($wp_root)
			);

			foreach( $fileinfos as $pathname => $fileinfo ) {

			    if ( !$fileinfo->isFile() ) continue;
				array_push( $wp_files, $pathname );

			}
	
			$temp_file = tempnam( sys_get_temp_dir(), 'Fuse' );
			$zip = new ZipArchive();
			$zip->open( $temp_file, ZipArchive::OVERWRITE );
	
			foreach( $wp_files as $file ) {
				$zip->addFile( $file );
			}
	
			$zip->close();

			// $backup_root = $wp_root .'/wp-content/uploads/backups';


			// if( file_exists( $backup_root ) == false ) {
			// 	mkdir( $backup_root );
			// }


			// $backup_file = $backup_root .'/'. uniqid() .'.zip';
			// $zip_backup = create_zip( $wp_files, $backup_file );

			// return var_dump( $wp_files );
	
	
	
			return $temp_file;

		}
	
	}
	
	
	
?>