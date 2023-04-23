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
		<div id="primary">
			<div id="content" role="main">

				<?php
				while ( have_posts() ) :
					the_post();
					the_date();
					echo '<br>';
					the_title();
					the_content();
					?>

					<!-- <?php get_template_part( 'content-single', get_post_format() ); ?> -->

					<!-- <?php comments_template( '', true ); ?> -->

				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</main>

	<footer>
        <?php get_footer(); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>