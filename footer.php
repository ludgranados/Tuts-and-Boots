<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tuts_and_Boots
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tuts-and-boots' ), 'tuts-and-boots', '<a href="/">Abraham</a>' );
				?>
		</div><!-- .site-info -->
<br>
		<nav id="footer-navigation" class="footer-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
