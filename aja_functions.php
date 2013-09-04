<?php
/**
 * Plugin Name: AJA Functions
 * Plugin URI: https://github.com/AJAlabs/aja_functions
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

// Adds Google Analytics to the footer
// Insert your code between the Begins and Ends block
add_action('wp_footer', 'add_google_analytics');
  function add_google_analytics() { ?>
<!-- Google Analytics: Begins-->
<!-- Google Analytics: Ends-->
<?php }

/* Place custom code above this line. */
?>