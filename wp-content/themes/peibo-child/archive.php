<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if(is_post_type_archive('blog-site')) : ?>
				<div class="curve curve__topLeft"></div>
        <div class="curve curve__topRight"></div>
        <section class="blogSec">
          <div class="blogSec__main">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <h1 class="blogSec__title">blog</h1>
                </div><!-- end.col-* -->
              </div>
              <div class="row justify-content-center">
                <div class="col-12">
                  <?php echo do_shortcode('[ajax_load_more id="listBlogPost" container_type="div" css_classes="ctAjax" post_type="blog-site" posts_per_page="4" scroll="false" transition_container_classes="row" progress_bar="true" progress_bar_color="000000" button_label="Cargar más"]'); ?>
                </div>
              </div><!-- end.row --> 
            </div><!-- end.container --> 
          </div><!-- end.blogSec__main -->
        </section>
<div class=" maskLegalesBottom"></div>
<?php else: ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; ?>
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
<?php
get_footer();
