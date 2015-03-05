<?php 

function theme_register_menus() {
register_nav_menus(
array(
'menu-header' => __( 'Menu Header', 'rinoplastiaperu' ),
'menu-footer' => __( 'Menu Footer', 'rinoplastiaperu' ),
)
);
}

add_action( 'init', 'theme_register_menus' );
 ?>