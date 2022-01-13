<?php
/*
 * The footer for displaying footer-widgets and site-info.
 */
?>

<div id="footer">
	<?php if ( is_active_sidebar( 'footer-right' ) || is_active_sidebar( 'footer-left' ) ) { ?>
	<div id="footer-widgets" role="complementary">
		<div class="footer-right">
			<?php dynamic_sidebar( 'footer-right' ); ?>
		</div>

		<div class="footer-left"> 
			<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
	</div>
	<?php } ?>

	<div class="site-info" role="contentinfo">
		<?php if ( get_theme_mod( 'onecolumn_footer_content' ) ) { ?>
			<?php echo wp_kses_post( get_theme_mod('onecolumn_footer_content') ); ?>
		<?php } else { ?>
			<?php _e('Copyright', 'onecolumn'); ?> <?php echo date('Y'); ?>  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<?php } ?>
	</div>
</div>
</div><!-- #main-content -->
</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>
