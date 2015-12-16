<?php
/**
 * Plugin Name: Custom CSS
 * Plugin URI: http://sitespace.club
 * Description: Add Custom CSS to your WordPress site without editing any files or making a child theme.
 * Author: Site Space
 * Author URI: http://sitespace.club
 * Version: 1.0
 * Text Domain: SCCSS
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package SCCSS
 * @author Braydan Willrath
 * @version 1.0
 */

// Prevent direct file access
if( ! defined( 'ABSPATH' ) ) {
	die();
}

define( 'SCCSS_FILE', __FILE__ );

if( ! is_admin() ) {
	require_once dirname( SCCSS_FILE ) . '/includes/public.php';
} elseif( ! defined( 'DOING_AJAX' ) ) {
	require_once dirname( SCCSS_FILE ) . '/includes/admin.php';
}
