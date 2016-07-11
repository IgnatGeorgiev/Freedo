<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Freedo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div class="columns small-2">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div><!-- .columns medium-4 -->
<div class="columns small-2">
	<aside class="widget-area second-widget" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside><!-- #secondary -->
</div>
