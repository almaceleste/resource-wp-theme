<div class="wp-block-cover is-light">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <div class="wp-block-group header-nav-block <?php if ( is_admin_bar_showing() ) { echo 'admin'; } ?>">
            <?php wp_nav_menu( array(
                'theme_location'    => 'header_menu',
                'container'         => false
            ) ) ?>
            <!-- wp:navigation {"ref":8,"icon":"menu","align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
        </div>
        <div class="wp-block-site-logo">
            <a href="http://localhost/" class="custom-logo-link" rel="home" aria-current="page">
                <img width="200" height="200" src="<?php echo esc_url( get_template_directory_uri() ) ?><?php _e('/images/logo.png', 'resource') ?>" class="custom-logo" alt="<?php _e('logo_alt_text', 'resource') ?>">

            </a>
        </div>
    </div>
</div>
