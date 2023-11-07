<?php
/**
* Plugin.
* @package reactplug
* @wordpress-plugin
* Plugin Name:     Catfact
* Description:     Facts about cats
* Author:          John Dufaye
* Author URL:      https://pamplemouss.netlify.app/portfolio
* Version:         1.0
*/

function render_catfact() {
    ob_start();
    ?>
    <!-- Define CATFACT_URL in wp-config.php -->
    <iframe src="<?= CATFACT_URL ?>" width="100%" height="400px" frameBorder="0"></iframe>

    <?php return ob_get_clean();
}

add_shortcode('fact', 'render_catfact');
?>