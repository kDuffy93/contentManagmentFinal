<?php
/**
 * The footer.
 * This is the template that displays the footer.
 */
?>


<footer>
	<aside>
	<nav>
		<?php 
		wp_nav_menu( array( 
			'menu' => 'main',
			'theme_location' => '',
			'depth' => 2,
			'fallback_cb' => false,
			));
		?>
	</nav>
	</aside>
	<div class="logo-container">
		<a href="<?php echo esc_url( home_url() ); ?>">
			<img src="<?php echo esc_url( home_url('wp-content/uploads/2023/04/headerLogo.png'))?>" alt="header logo">
		</a>
	</div>
</footer>
	</body>
</html>