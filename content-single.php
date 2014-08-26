<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'toolbox' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', ', ' );
			
			if ( ! toolbox_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %2$s | <a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a> ', 'toolbox' );
				} else {
					$meta_text = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a> ', 'toolbox' );
				}
				
			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'Categories: %1$s | Tags: %2$s | <a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a> ', 'toolbox' );
				} else {
					$meta_text = __( 'Categories: %1$s | <a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permalink</a> ', 'toolbox' );
				}
				
			} // end check for categories on this blog
			
			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'toolbox' ), '| <span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
