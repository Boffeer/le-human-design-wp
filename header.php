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
	<meta name="format-detection" content="telephone=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	$title = carbon_get_post_meta($page_id, 'page_title');
	$desc = carbon_get_post_meta($page_id, 'page_description');
	$og_image = carbon_get_post_meta($page_id, 'og_image');
	?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo get_site_url(); ?>" />
	<?php if ($title) : ?>
		<title><?php echo $title; ?></title>
		<meta property="og:title" content="<?php echo $title; ?>" />
	<?php endif; ?>
	<?php if ($desc) : ?>
		<meta name="description" content="<?php echo $desc; ?>">
		<meta property="og:description" content="<?php echo $desc; ?>" />
	<?php endif; ?>
	<meta property="og:image" content="<?php echo $og_image; ?>" />


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php $contacts = get_crb_contacts(); ?>
	<header class="header">
		<div class="container header__container">
			<a href="#" class="header-branding"><span class="header-branding__text">Nedko Pazvantov</span></a>
			<div class="header__contact">
				<a href="tel:<?php echo $contacts['phone_raw']; ?>" class="header__phone phone" data-clicked-text="copié !"><?php echo $contacts['phone']; ?></a><button class="button button--secondary header__button-callback">
					Contactez-no us
				</button>
			</div>
		</div>
	</header>
