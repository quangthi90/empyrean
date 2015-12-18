<?php
/**
 * WordPress Administration Template Footer
 *
 * @package WordPress
 * @subpackage Administration
 */

// don't load directly
if ( !defined('ABSPATH') )
	die('-1');
?>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter" role="contentinfo">
	<?php
	/**
	 * Fires after the opening tag for the admin footer.
	 *
	 * @since 2.5.0
	 */
	do_action( 'in_admin_footer' );
	?>
	<p id="footer-left" class="alignleft">
		<?php
		$text = sprintf( __( 'Thank you for creating with <a href="%s">WordPress</a>.' ), __( 'https://wordpress.org/' ) );
		/**
		 * Filter the "Thank you" text displayed in the admin footer.
		 *
		 * @since 2.8.0
		 *
		 * @param string $text The content that will be printed.
		 */
		echo apply_filters( 'admin_footer_text', '<span id="footer-thankyou">' . $text . '</span>' );
		?>
	</p>
	<p id="footer-upgrade" class="alignright">
		<?php
		/**
		 * Filter the version/update text displayed in the admin footer.
		 *
		 * WordPress prints the current version and update information,
		 * using core_update_footer() at priority 10.
		 *
		 * @since 2.3.0
		 *
		 * @see core_update_footer()
		 *
		 * @param string $content The content that will be printed.
		 */
		echo apply_filters( 'update_footer', '' );
		?>
	</p>
	<div class="clear"></div>
</div>
<?php
/**
 * Print scripts or data before the default footer scripts.
 *
 * @since 1.2.0
 *
 * @param string $data The data to print.
 */
do_action( 'admin_footer', '' );

/**
 * Prints any scripts and data queued for the footer.
 *
 * @since 2.8.0
 */
do_action( 'admin_print_footer_scripts' );

/**
 * Print scripts or data after the default footer scripts.
 *
 * The dynamic portion of the hook name, `$GLOBALS['hook_suffix']`,
 * refers to the global hook suffix of the current page.
 *
 * @since 2.8.0
 *
 * @global string $hook_suffix
 * @param string $hook_suffix The current admin page.
 */
do_action( "admin_footer-" . $GLOBALS['hook_suffix'] );

// get_site_option() won't exist when auto upgrading from <= 2.7
if ( function_exists('get_site_option') ) {
	if ( false === get_site_option('can_compress_scripts') )
		compression_test();
}

?>

<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">
	if(typeof wpOnload=='function')wpOnload();
	jQuery("#wp-admin-bar-wp-logo").remove();
	jQuery("#wp-admin-bar-updates").remove();
	jQuery("#wp-admin-bar-comments").remove();
	jQuery("#wp-admin-bar-new-content").remove();

	jQuery("#menu-dashboard").remove();
	jQuery("#menu-posts").remove();
	jQuery("#menu-comments").remove();
	jQuery("#menu-plugins").remove();
	jQuery("#menu-tools").remove();
	jQuery("#menu-pages").remove();
	jQuery("#menu-appearance").remove();

	jQuery('#menu-settings a[href="options-reading.php"]').remove();
	jQuery('#menu-settings a[href="options-writing.php"]').remove();
	jQuery('#menu-settings a[href="options-discussion.php"]').remove();
	jQuery('#menu-settings a[href="options-media.php"]').remove();
	jQuery('#menu-settings a[href="options-general.php?page=foobox-free"]').remove();

	jQuery("#menu-media ul > li > a[href='upload.php?page=foogallery-help']").remove();
	jQuery("#menu-media ul > li > a[href='upload.php?page=foogallery-extensions']").hide(0);
</script>
</body>
</html>
