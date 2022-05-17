<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le-human-design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container header__container">
			<a href="#" class="header-branding"><span class="header-branding__text">Nedko Pazvantov</span></a>
			<div class="header__contact">
				<a href="tel:+47589999999" class="header__phone phone" data-clicked-text="copié !">+4 (758) 999 99-99</a><button class="button button--secondary header__button-callback">
					Contactez-no us
				</button>
			</div>
		</div>
	</header>
