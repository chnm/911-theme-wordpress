<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<nav id="footer-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</nav>
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			<p>Copyright &copy; 2002-2011, <a href="http://chnm.gmu.edu" target="external">Center for History and New Media</a>  and <a href="http://www.ashp.cuny.edu" target="external">American Social History Project/Center for Media and Learning.</a></p>
			<p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'toolbox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'toolbox' ), 'WordPress' ); ?></a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>