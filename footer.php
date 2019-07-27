<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s-materializecss-materializecss
 */

?>
		</div><!-- .row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s-materializecss' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s-materializecss' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', '_s-materializecss' ), '_s-materializecss', '<a href="https://ndzynes.com/">nDzynes</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
