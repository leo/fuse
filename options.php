<div class="wrap">
 
	<h2>Sicherungen <a href="http://localhost:8888/wp-admin/plugin-install.php" class="add-new-h2">Erstellen</a></h2>
 	
		<form style="display:none" method="get" action="">
			<?php wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false ); ?>
			<?php wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false ); ?>
		</form>
		
		<?php
	
			if( isset( $_GET['settings'] ) ) {
				$p = 'settings';
				$s = true;
			} else {
				$p = 'overall';
				$s = false;
			}

		?>
		
		<?php if( $s ) { ?><form method="get" action="/"><?php } ?>
 
	        <div id="poststuff">
	            <div id="post-body" class="metabox-holder columns-2">
				
					<div id="post-body-content">
						<?php require( 'inc/pages/'. $p .'.php' ); ?>
					</div>
 
					<div id="postbox-container-1" class="postbox-container">
						<?php do_meta_boxes( 'fuse_admin_'. $p, 'side', NULL ); ?>
					</div>
 
				</div>
	        </div>
		
		<?php if( $s ) { ?></form><?php } ?>
 
</div>