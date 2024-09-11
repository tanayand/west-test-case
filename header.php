<?php
/**
 * The template for displaying the header
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<?php get_template_part('template-parts/header/top-header'); ?>