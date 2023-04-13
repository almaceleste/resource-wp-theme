<div class="wp-block-cover is-light">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <div class="wp-block-group header-nav-block">
            <!-- wp:navigation {"ref":8,"icon":"menu","align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
        </div>
        <div class="wp-block-site-logo">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
            ?>
        </div>
        <nav id="bvi">
            <?php get_template_part('bvi'); ?>
        </nav>
    </div>
</div>
