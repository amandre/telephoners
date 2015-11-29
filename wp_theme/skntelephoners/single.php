<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>">
	<header class="article_header">
		<?php the_title( '<h2>','</h2>' ); ?>
		<p>Przez <?php the_author(); ?> | <?php the_time('F jS, Y') ?></p>
	</header>
	<section class="content">
		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
			
			while ( have_posts() ) : the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;


			// End the loop.
			endwhile;
		?>
	</section>
	<!-- <footer class="article_footer">
		<a href="<?php the_permalink(); ?>">WIĘCEJ</a>
	</footer> -->
</article>


<?php get_footer(); ?>