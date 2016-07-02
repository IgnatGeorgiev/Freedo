<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Freedo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer section-fullwidth">
		<div class="row">
			<div class="columns small-12">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dxstarter' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dxstarter' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Developed by: %1$s by %2$s.', 'dxstarter' ), 'dxstarter', '<a href="http://devrix.com">DevriX</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- .small-12 -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
