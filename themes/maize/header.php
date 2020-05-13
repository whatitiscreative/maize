<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114672475-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-114672475-1');
	</script> -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="Maize">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php if ($url = esc_url(get_field('online_shop_url', 'options'))) : ?>
		<a class="online-shop-link" href="<?php echo $url; ?>" target="_blank">
			<span>Order Online</span>
			<!-- <img src="<?php echo get_theme_file_uri('images/order-online-badge.png'); ?>" alt="Order online"> -->
			<?php include get_theme_file_path('images/order-online-badge.svg'); ?>
		</a>
	<?php endif; ?>

	<div id="content" class="site-content">
