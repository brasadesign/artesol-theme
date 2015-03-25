<?php
/**
 * The Header page for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container home">
		<header id="header" role="banner" class="header-home">

			<div class="logo col-sm-4">

				<?php if( get_page_by_title( 'Apresentação' ) && is_home() ) : ?>
					<a href="<?php echo esc_url( home_url() ); ?>/apresentacao" class="link">
					</a><!-- link -->
				<?php endif; ?>

				<div class="icon-search"></div><!-- icon-search -->
				<div class="icon-menu" id="menu-click" data-open="false"></div><!-- icon-menu -->

			</div><!-- logo -->
			<nav id="menu-top">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'nav navbar-nav menu-top',
						'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker'         => new Odin_Bootstrap_Nav_Walker()
						)
				);
				?>
			</nav><!-- #menu -->
			<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) : ?>
					    <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
					    <div style="background: url(' <?php echo $img[0]; ?>' ) center center no-repeat" class="destaque-1 col-md-8 col-sm-12 page-thumbnail">
					    	<a class="link" href="#">
					    		<h2><?php the_excerpt(); ?></h2>
					    	</a>
					    </div><!-- destaque-1 -->
					<?php endif; ?>
			<?php endwhile; ?>
			<div class="clear"></div>

		</header><!-- #header -->

		<div id="main" class="site-main row">
