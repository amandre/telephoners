﻿<footer class="bottom">
	<div class="container">
	<span>© 2015 Koło Naukowe Telephoners</span> 
	<p>
<a href="https://www.facebook.com/telephoners/?ref=ts&fref=ts"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="logo AGH.EDU.PL"/></a>
<a href="http://www.agh.edu.pl"><img src="<?php echo get_template_directory_uri(); ?>/images/agh_img.png" alt="logo AGH.EDU.PL"/></a>
		<a href="http://www.kt.agh.edu.pl"><img src="<?php echo get_template_directory_uri(); ?>/images/kt_img.png" alt="logo KT.AGH.EDU.PL"/></a>
		<a href="http://www.iet.agh.edu.pl"><img src="<?php echo get_template_directory_uri(); ?>/images/iet_img.png" alt="logo IET.AGH.EDU.PL"/></a> 
		<a href="/index.php/kontakt/">KONTAKT</a>
	</p>
	
	<?php
	/*
		if ( has_nav_menu( 'footer' ) ) {
			echo '<div class="footer__menu">';
			wp_nav_menu(
				array(
					'theme_location'  => 'footer',
					'container_class' => 'menu-footer-container',
					'menu_class'      => 'menu-footer'
				)
			);
			echo '</div>' . PHP_EOL;
			echo '<!-- .footer__menu -->';
		}
	*/?>
		</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>