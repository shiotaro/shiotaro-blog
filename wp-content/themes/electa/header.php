<?php
/**
 * @package electa
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_theme_mod( 'kra-header-favicon', false ) ) :
    echo '<link rel="icon" href="' . esc_url( get_theme_mod( 'kra-header-favicon' ) ) . '">';
endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(  ); ?>>
    
<header id="masthead" class="site-header<?php echo ( get_header_image() ) ? '' : ' header-nologo'; ?>" role="banner">
    <?php if ( get_theme_mod( 'kra-header-search', false ) ) : ?>
    <div class="search-button">
        <div class="search-block">
            <div class="search-block-arrow"></div>
            <?php get_search_form(); ?>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="site-header-inner">
    	<div class="site-branding">
            <?php if ( get_header_image() ) : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" rel="home"><img src="<?php esc_url( header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>" /></a>
                <?php if ( get_theme_mod( 'kra-header-slogan', false ) ) : ?>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php endif; ?>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php if ( get_theme_mod( 'kra-header-slogan', false ) ) : ?>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php endif; ?>
            <?php endif; ?>
    	</div>
        
    	<nav id="site-navigation" class="main-navigation" role="navigation">
    		<button class="menu-toggle"><?php _e( 'Menu', 'electa' ); ?></button>
    		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    	</nav><!-- #site-navigation -->
        
        <?php if( get_theme_mod( 'kra-header-search', false ) ) : ?>
        <div class="header-social">
            <i class="fa fa-search search-btn"></i>
        </div>
        <?php endif; ?>
        
        <?php printf( __( '</div><div class="site-info">Theme: %1$s by %2$s', 'electa' ), 'Electa', '<a href="http://www.kairaweb.com/">Kaira</a>' ); ?>
    </div>
</header><!-- #masthead -->

<div id="content" class="site-content">