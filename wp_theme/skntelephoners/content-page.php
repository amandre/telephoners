
<article <?php post_class( 'single-post' ); ?>>
	<header>
		<h1><?php single_post_title(); ?></h1>
	</header>

	
		<?php the_content(); ?>
	

	<?php
		// comments
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>

</article>