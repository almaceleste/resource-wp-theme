<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <?php get_template_part('head'); ?>
</head>
<body>
    <header>
        <?php get_header(); ?>
    </header>

    <main>
        <h1 class="alignwide has-text-align-center"><?php _e('Home_heading', 'resource') ?></h1>

        <div class="wp-block-columns alignwide resources">
            <?php for ($i=1; $i <= 4; $i++) {
                $group = 'group' . $i; ?>
                <div class="wp-block-column">
                    <figure class="wp-block-image aligncenter size-medium">
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/<?php echo $group ?>.png" alt="<?php _e($group . '_name', 'resource') ?>">
                    </figure>
                    <h4 class="has-text-align-center"><?php _e($group . '_name', 'resource') ?></h4>
                    <p class="has-text-align-center"><?php _e($group . '_description', 'resource') ?></p>
                    <div class="wp-block-buttons">
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button"><?php _e('Read more', 'resource') ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php get_sidebar() ?>
    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>