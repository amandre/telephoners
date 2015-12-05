<?php

function register_sknmenu() {
  register_nav_menu('primary-menu',__( 'Główne menu strony' ));
}
add_action( 'init', 'register_sknmenu' );

function new_excerpt_more( $more ) {
	return '(...)';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
