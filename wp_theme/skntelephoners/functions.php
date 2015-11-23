<?php

function register_sknmenu() {
  register_nav_menu('primary-menu',__( 'Główne menu strony' ));
}
add_action( 'init', 'register_sknmenu' );

?>