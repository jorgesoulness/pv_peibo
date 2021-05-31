<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <!-- S T Y L E S - G E N E R A L -->
        <meta name="theme-color" content="#712a81" />
        <?php wp_head(); ?>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

    <div class="overProgress fadeX"></div>

    <div id="blockhh" class="head-block"></div>

    <!-- Header -->
    <header id="headerGeneral" class="g-header" data-blur-content>
      <div class="brand">
<?php
      the_custom_logo();
  if (is_page(39)) :
?>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php else : ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<?php
  endif;
?>
      </div>
      <nav class="btnNav">
        <a href="#menu" data-menu-expand="#menu"><?php _e('Menú', 'peibo-child'); ?></a>
      </nav>
    </header><!-- end.header -->

    <!-- Menu -->
    <nav id="menu">
      <div class="inner">
<?php
      wp_nav_menu( array(
        'items_wrap'     => '<ul class="links">%3$s</ul>',
        'theme_location' => 'menu-main',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'before'          => '',
        'after'           => '',
      ) );
?>
        <ul class="actions stacked">
          <a class="btnFx btnFx__generic btnFx__generic--orange" href="<?php echo esc_url(site_url('')); ?>/<?php $currentLanguage  = get_bloginfo('language'); if($currentLanguage == "en-US") : ?>en/contact-us<?php elseif($currentLanguage == "pt-PT") : ?>pt/contato<?php else: ?>contacto<?php endif; ?>"><span><?php _e('Contacto', 'peibo-child'); ?></span></a>
        </ul>
      </div>
      <a class="close" href="#menu"><?php _e('Cerrar', 'peibo-child'); ?></a>
    </nav>
    
    <!-- Main -->
    <main class="PageContainer" data-blur-content>
      <div id="primary" class="content-area">
