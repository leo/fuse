<?php

   /*
	* Plugin Name: Fuse
	* Plugin URI: http://leo.im/fuse
	* Description: A brief description of the Plugin.
	* Version: 1.0
	* Author: Leonard Lamprecht
	* Author URI: http://leo.im
	* License: GPL2
	*/
   

	function fuse_settings_page() {
		
	    function fuse_settings_page_load() {
	 	  require( plugin_dir_path( __FILE__ ) .'/options.php' );
	    }
		
		add_options_page( 'Fuse', 'Sicherungen', 'manage_options', 'fuse', 'fuse_settings_page_load' );
		
	}

	add_action( 'admin_menu', 'fuse_settings_page' );

	
   
   	


	/*
	 
	function example_add_dashboard_widgets() {

		wp_add_dashboard_widget(
	                 'example_dashboard_widget',         // Widget slug.
	                 'Backup-Status',         // Title.
	                 'example_dashboard_widget_function' // Display function.
	        );	
	}
	add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );


	function example_dashboard_widget_function() { ?>
		
		Aktuell ist keine Sicherung im Gange.<br><br>
		
			<ul>
				<li><b>- Letzte Sicherung:</b> 20.02.2013 um 20:30 Uhr</li>
				<li><b>- Nächste Sicherung:</b> 20.02.2013 um 20:30 Uhr</li>
			</ul>
	
	<?php }
	
	*/


	
	function fuse_plugin_action_links( $links ) {
 
		return array_merge(
			array(
				'options' => '<a href="/wp-admin/options-general.php?page=fuse">Optionen</a>'
			),
			$links
		);
 
	}
	
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'fuse_plugin_action_links' );
	
	
	function fuse_add_meta_boxes() {
		
		function fuse_load_meta_box( $post, $query ) {
			require( 'inc/meta/'. $query['args'] .'.php' );
		}
		
		add_meta_box( 'fuse_metabox_state', 'Status', 'fuse_load_meta_box', 'fuse_admin_overall', 'side', 'default', 'state' );
		add_meta_box( 'fuse_metabox_save', 'Aktualisieren', 'fuse_load_meta_box', 'fuse_admin_settings', 'side', 'default', 'save' );
		
		add_meta_box( 'fuse_metabox_settings_general', 'Allgemein', 'fuse_load_meta_box', 'fuse_admin_settings', 'normal', 'default', 'opt-general' );
		add_meta_box( 'fuse_metabox_settings_ftp', 'FTP-Daten', 'fuse_load_meta_box', 'fuse_admin_settings', 'normal', 'default', 'opt-ftp' );
		
	}
	
	add_action( 'admin_init', 'fuse_add_meta_boxes' );
	
	
	function fuse_admin_scripts() {
		wp_enqueue_script( 'admin_js', plugins_url( 'assets/js/core.js', __FILE__ ) );
		wp_enqueue_script( 'post' );
		wp_enqueue_script( 'postbox' );
		wp_enqueue_script( 'wp-lists' );
	}
	
	add_action( 'admin_init', 'fuse_admin_scripts' );
	
	
	function fuse_admin_styles() {
		wp_enqueue_style( 'admin_css', plugins_url( 'assets/css/core.css', __FILE__ ) );
	}
		  
	add_action( 'admin_init', 'fuse_admin_styles' );
   

?>