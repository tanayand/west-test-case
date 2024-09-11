<?php
/**
 * Displays top navigation
 */
?>

<div id="mySidenav" class="nav-container sidenav">
    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'west' ); ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-header',
            'menu_class' => 'menu',
            'container' => '',
        ]);
        ?>
    </nav>
</div>