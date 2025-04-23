<div class="header-bottom">

    <nav id="site-navigation" class="header-bottom__main-navigation">
        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'phukiendep'); ?></button> -->
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</div>