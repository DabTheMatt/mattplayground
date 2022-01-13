<?php

/**
 * Plugin Name:     Matt Post Types and Taxonomies
 * Plugin URI:      
 * Description:     Simple plugin creating post types and taxonomies
 * Version:         1.0
 * Author:          Matt
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     matt-post-types
 * Domain Path:     /languages
 */

 if (! defined( 'ABSPATH' ) ) {
     exit;
 }

 define( 'MATT_VERSION', '1.0' );
 define( 'MATTDOMAIN', 'matt-post-types' );
 define( 'MATTPATH', plugin_dir_path( __FILE__ ) );

 require_once( MATTPATH . '/post-types/register.php');

add_action( 'init', 'matt_register_music_type');
add_action( 'init', 'matt_register_movie_type');

require_once( MATTPATH . '/taxonomies/register.php');
