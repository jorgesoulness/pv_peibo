<?php
/*
* Template Name: Blog Template
* @package Peibo_Child
*/
get_header();
global $post;
?>      

<?php if(have_posts()): while(have_posts()) : the_post(); ?>
<!-- <div class=" maskLegalesMiddle"></div> -->
<!-- <div class=" maskTerminos"></div> -->
      <article class="bg-gen"> 
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
<!-- <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  // $blogs = array(
  //   'post_type'   => 'blog-site',
  //   'post_status' => 'publish',
  //   'posts_per_page' => 4,
  //   'order'       => 'DESC',
  //  );
  //  $in = 0;
  //  $blogList = new WP_Query( $blogs );
?>
<?php // if($blogList->have_posts()) : while($blogList->have_posts()) : $blogList->the_post(); ?>
  <?php // if (($blogList->current_post + 1) === 1) : ?>
                <div class="col-12">
                  <div class="mainBoxBlog">
                    <div class="mainBoxBlog__image">
                    <?php //if(has_post_thumbnail()) : ?>
                      <?php //echo the_post_thumbnail(); ?>
                    <?php //else: ?>
                      <img src="<?php //echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php //the_title(); ?>">
                    <?php //endif; ?>
                    </div>
                    <div class="mainBoxBlog__desc">
                      <span class="mainBoxBlog__date"><?php //the_time( 'F j, Y' ); ?></span>
                      <h4><?php //the_title(); ?></h4>
                      <div class="mainBoxBlog__divider"></div>
                      <div class="rte">
                        <?php //the_excerpt(); ?>
                      </div>
                      <a href="<?php //the_permalink(); ?>" class="mainBoxBlog__link">Leer más</a>
                    </div>
                  </div>
                </div>
                <div class="col-12"><hr class="blogSec__hr"></div>
  <?php //else: ?>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="boxBlog">
                    <div class="boxBlog__image">
                    <?php //if(has_post_thumbnail()) : ?>
                      <?php //echo the_post_thumbnail(); ?>
                    <?php //else: ?>
                      <img src="<?php //echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php //the_title(); ?>">
                    <?php //endif; ?>
                    </div>
                    <div class="boxBlog__desc">
                      <span class="boxBlog__date"><?php //the_time( 'F j, Y' ); ?></span>
                      <h4><?php //the_title(); ?></h4>
                      <div class="boxBlog__divider"></div>
                      <div class="rte">
                        <?php //the_excerpt(); ?>
                      </div>
                      <a href="<?php //the_permalink(); ?>" class="boxBlog__link">Leer más</a>
                    </div>
                  </div>
                </div>
  <?php //endif; ?>
<?php //$in ++; endwhile; ?>
<?php //else : ?>
                <div class="col-12">
                  <div class="blogSec__notfound">
                    <h3>Ooops!</h3>
                    <p>No se encontaron datos en Blog</p>
                  </div>
                </div>
<?php //endif; ?>
<?php //wp_reset_query(); ?> -->
              </div><!-- end.row --> 
            </div><!-- end.container --> 
          </div><!-- end.blogSec__main -->
        </section>

      </article><!-- end.article inicio -->
<?php endwhile; else: ?>

<?php endif; ?>
<div class=" maskLegalesBottom"></div>

<?php
get_footer();