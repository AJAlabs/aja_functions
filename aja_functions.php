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
// Edit the _setAccount and _setDomainName
add_action('wp_footer', 'add_google_analytics');
  function add_google_analytics() { ?>
<!-- Google Analytics: -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-X']);
  _gaq.push(['_setDomainName', 'xxxxxx.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php }

/* Place custom code above this line. */
?>