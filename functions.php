<?php

function add_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_style' );


//Start of Matomo Tracker Code
function Matomo_Tags(){
?>
	<!-- Matomo Tag Manager -->
	<!-- End Matomo Tag Manager -->
<?php
}
add_action('wp_head', 'Matomo_Tags');
//End of Matomo Tracker Code

?>
