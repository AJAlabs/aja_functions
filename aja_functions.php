<?php
/**
 * Plugin Name: AJA Functions
 * Plugin URI: http://ajalabs.com
 * Description: Custom WordPress functions.php that is not theme dependent.
 * Author: AJ Acevedo
 * Author URI: http://ajacevedo.com
 * Version: 0.1.0
 * License: MIT License
 */

/* Place custom code below this line. */

// Remove WordPress version meta generator from head
remove_action('wp_head', 'wp_generator');

// Remove Windows Live Writer meta from head
remove_action('wp_head', 'wlwmanifest_link');


/* Place custom code above this line. */
?>