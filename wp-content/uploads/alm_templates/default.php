<?php if ($alm_item === 1) : ?>
                <div class="col-12">
                  <div class="mainBoxBlog">
                    <div class="mainBoxBlog__image">
                    <?php if(has_post_thumbnail()) : ?>
                      <?php echo the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    </div>
                    <div class="mainBoxBlog__desc">
                      <span class="mainBoxBlog__date"><?php the_time( 'F j, Y' ); ?></span>
                      <h4><?php the_title(); ?></h4>
                      <div class="mainBoxBlog__divider"></div>
                      <div class="rte">
                        <?php the_excerpt(); ?>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="mainBoxBlog__link">Leer más</a>
                    </div>
                  </div><!-- end.mainBoxBlog --> 
                </div><!-- end.col-* --> 
                <div class="col-12"><hr class="blogSec__hr"></div><!-- end.col-* -->
  <?php else: ?>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="boxBlog">
                    <div class="boxBlog__image">
                    <?php if(has_post_thumbnail()) : ?>
                      <?php echo the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    </div>
                    <div class="boxBlog__desc">
                      <span class="boxBlog__date"><?php the_time( 'F j, Y' ); ?></span>
                      <h4><?php the_title(); ?></h4>
                      <div class="boxBlog__divider"></div>
                      <div class="rte">
                        <?php the_excerpt(); ?>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="boxBlog__link">Leer más</a>
                    </div>
                  </div><!-- end.boxBlog --> 
                </div><!-- end.col-* -->
  <?php endif; ?>