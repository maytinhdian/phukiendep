<div class="header-main">

    <div class="header-main__site-branding">
        <?php
        $phukiendep_description = get_bloginfo('description', 'display');

        if (is_front_page() || is_home()) :
        ?>
            <div class="site-branding__logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php
        else :
        ?>
            <p class="header-main__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
            <p class="header-main__site-description"><?php echo $phukiendep_description; ?></p>
        <?php
        endif;

        ?>

    </div><!-- .site-branding -->


</div>