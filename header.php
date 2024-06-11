<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gunna
 */

?>
<!doctype h<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- swiperJS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gunna'); ?></a>

		<header id="masthead" class="site-header  text-white py-4">
			<div class="container mx-auto flex justify-between items-center">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title text-lg"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-blue-400"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title text-lg"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-blue-400"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$gunna_description = get_bloginfo('description', 'display');
					if ($gunna_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $gunna_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'items_wrap'     => '<ul id="%1$s" class="%2$s flex">%3$s</ul>',
							'menu_class'     => 'list-none',
							'link_before'    => '<li class="mx-2">',
							'link_after'     => '</li>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->