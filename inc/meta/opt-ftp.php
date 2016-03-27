<table class="wp-list-table widefat fuse-table">
	<tbody>
		
		<tr>
			<td class="label">
				<label for="fuse_opt_ftp_host">Serveradresse <span class="required">*</span></label>
				<p class="description">Hostname oder IPv4-Adresse deines Servers.</p>
			</th>
			<td>
				<input name="fuse_opt_ftp_host" type="text" id="fuse_opt_ftp_host" placeholder="<?php ph('host'); ?>:20" class="regular-text">
			</td>
		</tr>
	
		<tr>
			<td class="label">
				<label for="fuse_opt_ftp_user">FTP-Benutzer <span class="required">*</span></label>
			</td>
			<td>
				<input name="fuse_opt_ftp_user" type="text" id="fuse_opt_ftp_user" placeholder="<?php ph('user'); ?>" class="regular-text">
			</td>
		</tr>
	
		<tr>
			<td class="label">
				<label for="fuse_opt_ftp_password">FTP-Passwort <span class="required">*</span></label>
			</th>
			<td>
				<input name="fuse_opt_ftp_password" type="password" id="fuse_opt_ftp_password" placeholder="<?php ph('password');  ?>" class="regular-text">
			</td>
		</tr>
		
		<tr>
			<td class="label">
				<label for="fuse_opt_ftp_path">Datei-Pfad</label>
				<p class="description">Der Pfad zum Verzeichnis, unter dem die Backups gesichert werden sollen.</p>
			</th>
			<td>
				<input name="fuse_opt_ftp_path" type="text" id="fuse_opt_ftp_path" placeholder="/var/www/htdocs" class="regular-text">
			</td>
		</tr>
			  						
	</tbody>
</table>