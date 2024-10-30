<?php
/**
 * Uninstall procedures
 * 
 * @package HitTail
 * @author Yasir Saeed <service@hittail.com>
 * @version 1.0.0
 * @since 1.0.0
 */

// Exit if not called from WordPress
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit; }

// Remove options
delete_option( 'ht_options' );