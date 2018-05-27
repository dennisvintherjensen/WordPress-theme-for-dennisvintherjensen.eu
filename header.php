<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dennisvintherjensen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dennisvintherjensen' ); ?></a>

	<header id="masthead" class="site-header">

    <div class="spacer">

      <a class="site-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home">

        <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/images/dennis-vinther-jensen.jpg" />

        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) : 
        ?>
          <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <?php
        else :
        ?>
          <p class="site-title"><?php bloginfo( 'name' ); ?></p>
        <?php
        endif;
        $dennisvintherjensen_description = get_bloginfo( 'description', 'display' );
        if ( $dennisvintherjensen_description || is_customize_preview() ) :
        ?>
          <p class="site-description"><?php echo $dennisvintherjensen_description; /* WPCS: xss ok. */ ?></p>
        <?php endif; ?>

      </a>
      
      <nav id="site-navigation" class="main-navigation">

          <!-- <button type="button" class="menu-toggle" aria-controls="full-menu" aria-expanded="false">
            <i class="material-icons menu-icon">menu</i>
            <i class="material-icons menu-close-icon">close</i>
          </button> -->

          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'container'      => ''
          ) );
          ?>

        <?php
        // wp_nav_menu( array(
        //   'theme_location' => 'menu-2',
        //   'menu_id'        => 'secondary-menu',
        // ) );
        ?>

      </nav><!-- #site-navigation -->

      <div class="main-search">

        <button type="button" value="" class="search-toggle" aria-controls="search-form">
          <i class="material-icons search-icon">search</i>
          <i class="material-icons search-close-icon">close</i>
        </button>

        <form role="search" method="get" class="search-form" action="/">
          <input class="search-input" type="text" name="s" placeholder="Search..." />
        </form>

      </div>

    </div>

  </header><!-- #masthead -->
  
	<div id="content" class="site-content">
