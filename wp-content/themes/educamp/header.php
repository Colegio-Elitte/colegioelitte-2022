 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Educamp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if(is_singular() && pings_open()) { ?>
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#sitemain">
	<?php esc_html_e( 'Skip to content', 'educamp' ); ?>
</a>
<?php if((get_theme_mod('phone-txt')) || (get_theme_mod('email-txt')) != '') {?>
<div id="topbar">
	<div class="align">
    	<?php if(get_theme_mod('phone-txt') != '') { ?>
			<div class="top-left"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo esc_html(get_theme_mod('phone-txt',true)); ?></div><!-- top-left -->
        <?php } ?>
        <?php if(get_theme_mod('email-txt') != '') { ?>
        	<div class="top-right"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="<?php echo esc_attr(esc_html('mailto:','educamp').get_theme_mod('email-txt')); ?>"><?php echo esc_html(get_theme_mod('email-txt')); ?></a></div><!-- top-right -->
        <?php } ?>
    </div><!-- align --><div class="clear"></div>
</div><!-- #topbar -->
<?php } ?>
        
<div id="header">
            <div class="header-inner">	
				<div class="logo">
					<?php educamp_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_html($description); ?></p>
					<?php endif; ?>
				</div><!-- logo -->
                <div id="navigation">
            	<div class="toggle">
						<a class="toggleMenu" href="#"><?php esc_html_e('Menu','educamp'); ?></a>
				</div><!-- toggle --> 						
				<div class="sitenav">
						<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>							
				</div><!-- sitenav -->
                </div><!-- navigation --><div class="clear"></div>
            </div><!-- header-inner -->
		</div><!-- header -->