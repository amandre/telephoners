<?php get_header(); ?>

	<section class="slider">
		<!-- TODO slider widget -->
		<p>WYKŁADY</p>
	</section>
	
	<main id="main" role="main">
	<?php
		// posts query
		$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
		query_posts( $args );
		// pętla główna
		if ( have_posts() ) :
				echo '<section class="featured-articles">';

				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'featured-post' );
				endwhile;
				echo '</section>';
			else :
				get_template_part( 'content', 'none' );

		endif;
		// reset query
		wp_reset_query();
	?>
	</main>
	
	<label class="btn" for="show_btn">
		<input type="checkbox" id="show_btn" autocomplete="off">
			<p>JAK DOŁĄCZYĆ DO</p><p> <strong>SKN TELEPHONERS?</strong></p>
		<article class="cont">
			<p>Prowadzimy rekrutację ciągłą - można do nas dołączyć przez cały rok akademicki. Wystarczy podać swoje dane aktualnemu Zastępcy lub Przewodniczącemu Koła.</p>

			<p>Na początku otrzymuje się status <strong>OBSERWATORA</strong>.</p>
			<p>Aby sprawdzić jakie warunki należy spełnić aby otrzymać status <strong>CZŁONKA KOŁA</strong> - <a href="/index.php/o-nas/jak-zostac-czlonkiem-kola/">KLIKNIJ</a>!</p>
		</article> 
	</label>

<?php get_footer(); ?>