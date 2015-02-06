<?php
/**
 * The Header for our theme.
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
						'menu_class'     => 'nav navbar-nav',
						'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker'         => new Odin_Bootstrap_Nav_Walker()
						)
				);
				?>
			</nav><!-- #menu -->
			<?php if ( $background1 = get_field( 'background_destaque_1', 'options' ) ) : ?>

				<div style="background: url(' <?php echo $background1; ?>' ) center center no-repeat" class="destaque-1 col-sm-4">

					<?php if ( $url1 = get_field( 'link_destaque_1', 'options' ) ) : ?>
						<a class="link" href="<?php echo $url1; ?>">
					<?php endif; ?>

					<?php if ( $title1 = get_field( 'titulo_destaque_1', 'options' ) ) : ?>
						<h2><?php echo $title1; ?></h2>
					<?php endif; ?>
					<?php if ( $subtitle1 = get_field( 'sub_titulo_destaque_1', 'options' ) ) : ?>
						<h3><?php echo $subtitle1; ?></h3>
					<?php endif; ?>

					<?php if ( $url1 = get_field( 'link_destaque_1', 'options' ) ) : ?>
						</a>
					<?php endif; ?>

				</div><!-- destaque-1 -->

			<?php endif; ?>

			<?php if ( $background2 = get_field( 'background_destaque_2', 'options' ) ) : ?>

				<div style="background: url(' <?php echo $background2; ?>' ) center center no-repeat" class="destaque-2 col-sm-4">

					<?php if ( $url2 = get_field( 'link_destaque_2', 'options' ) ) : ?>
						<a class="link" href="<?php echo $url2; ?>">
					<?php endif; ?>

					<?php if ( $title2 = get_field( 'titulo_destaque_2', 'options' ) ) : ?>
						<h2><?php echo $title2; ?></h2>
					<?php endif; ?>
					<?php if ( $subtitle2 = get_field( 'sub_titulo_destaque_2', 'options' ) ) : ?>
						<h3><?php echo $subtitle2; ?></h3>
					<?php endif; ?>

					<?php if ( $url2 = get_field( 'link_destaque_2', 'options' ) ) : ?>
						</a>
					<?php endif; ?>

				</div><!-- destaque-2 -->

			<?php endif; ?>

			<div class="clear"></div>

		</header><!-- #header -->

		<div id="main" class="site-main row">
