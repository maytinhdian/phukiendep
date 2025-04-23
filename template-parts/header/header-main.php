<div class="header-main">

    <div class="header-main__site-branding">
        <?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
        ?>
            <h1 class="header-main__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
        ?>
            <p class="header-main__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        $phukiendep_description = get_bloginfo('description', 'display');
        if ($phukiendep_description || is_customize_preview()) :
        ?>
            <p class="header-main__site-description"><?php echo $phukiendep_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                        ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->


</div>