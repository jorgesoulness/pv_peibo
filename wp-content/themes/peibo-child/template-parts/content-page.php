<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-gen'); ?>>

<?php if ( get_edit_post_link() ) : ?>
	<div class="entry-footer editPostGen">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Editar <span class="screen-reader-text">%s</span>', 'equality-child' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</div><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
