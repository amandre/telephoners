<?php get_header(); ?>

<main id="main" role="main">
	<article class="404">
		<header>
			<h2><?php _e('We\'re sorry.', 'skntelephoners'); ?></h2>
		</header>
		<section>
			<p>
				<?php _e(
					'It was not possible to find the page you are looking for.',
					'skntelephoners'
				); ?>
			</p>

			<p>
				&raquo; <a href="<?php echo esc_url( home_url() ); ?>">
					<?php _e( 'HOME', 'skntelephoners' ); ?>
				</a>
			</p>
		</section>
		
	</article>
</main>

<?php get_footer(); ?>
