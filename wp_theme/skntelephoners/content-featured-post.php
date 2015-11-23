<?php
/**
 * Templatka wyświetlająca posty na stronie głównej
 *
 */
?>


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
		?>
		<p><?php the_content(); ?></p>
	</section>
	<footer class="article_footer">
		<a href="<?php the_permalink(); ?>">WIĘCEJ</a>
	</footer>
</article>