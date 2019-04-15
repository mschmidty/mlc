<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mlc_v1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="top-section-photo">
			<ul class="major-funders">
				<li><img src="" alt=""></li>
			</ul>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mlc_v1' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mlc_v1' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mlc_v1' ), 'Montezuma Land Conservancy Custom Theme V1.0', '<a href="http://schmidtyworks.com/">Schmidtyworks</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
