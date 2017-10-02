<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://hosting.review
 * @since      1.0.0
 *
 * @package    Hosting_Review_Optimization_Helper
 * @subpackage Hosting_Review_Optimization_Helper/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <h2>Nginx Fix</h2>
    <p>Nginx Fix by Hosting Review Settings</p>
	<?php settings_errors(); ?>

    <form method="post" action="options.php">
		<?php
		settings_fields( 'nginx_fix_option_group' );
		do_settings_sections( 'nginx-fix-admin' );
		submit_button();
		?>
    </form>
</div>
