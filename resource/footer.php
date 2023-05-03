<div class="wp-block-group">
    <div class="wp-block-site-logo">
        <!-- <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?> -->
        <a href="<?php _e('root_url', 'resource') ?>" class="custom-logo-link" rel="home" aria-current="page">
            <img width="70" height="70" src="<?php echo esc_url( get_template_directory_uri() ) ?><?php _e('/images/logo.png', 'resource') ?>" class="custom-logo" alt="<?php _e('logo_alt_text', 'resource') ?>">
        </a>
    </div>
    <pre class="wp-block-verse has-text-align-center"><?php _e('Footer_heading', 'resource') ?></pre>
    <p class="created-by has-text-align-right"> 🄯 <a href="https://almaceleste.github.io" data-type="URL" data-id="https://almaceleste.github.io" target="_blank" rel="noreferrer noopener">almaceleste</a>, 2023</p>
</div>
