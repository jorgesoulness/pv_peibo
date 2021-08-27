<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

?>

<?php if(is_single()): ?>
        <section class="blogSingle">
					<div class="blogSingle__cover">
				<?php 
				$image = get_field('image');
				if( !empty( $image ) ): ?>
    				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php else: ?>
    				<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/blog_img.jpg" alt="<?php the_title(); ?>">
				<?php endif; ?>
					</div><!--  end.blogSingle__cover -->
					<div class="blogSingle__descSingle">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="breadCt">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
										<?php if(function_exists('bcn_display'))
    								{
        							bcn_display();
    								}?>
											</ol>
										</nav>
									</div>
								</div>
								<div class="col-12">
									<h1 class="blogSingle__title"><?php the_title(); ?></h1>
									<span class="blogSingle__date"><?php the_time( 'F j, Y' ); ?></span>
									<?php the_content(); ?>
								</div><!-- end.col-12 -->
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.blogSingle__descSingle -->
				</section><!-- end.blogSingle -->
<?php else: ?>
	<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'peibo-child' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	?>
<?php endif; ?>
<div class=" maskLegalesBottom"></div>

