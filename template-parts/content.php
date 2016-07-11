<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DevriX_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry-header">

		<div class="entry-thumbnail">
			<?php if ( has_post_thumbnail() ) : the_post_thumbnail();  ?>
		</div>

		<a href="<?php comments_link(); ?>">
			<div class="comment-bubble">
				<?php comments_number( '0', '1 ', '% ' ); ?>
			</div>
		</a>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php dxstarter_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif;?>
		<?php else: ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php dxstarter_posted_on(); ?>
					<div class = "comment-link">
						<a href="<?php comment_link(); ?>">
							<?php comments_number( '0 Comments', ' 1 Comments ', ' % Comments' ); ?>
						</a>
					</div>
				</div><!-- .entry-meta -->
			<?php endif;?>
		<?php endif;?>
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		} ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dxstarter' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxstarter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
