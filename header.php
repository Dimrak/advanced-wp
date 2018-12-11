<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<!-- Some classes for the body -->
<body <?php body_class(); ?>> 
	<header>
		<div class="container">
			<h1><a href="<?php echo home_url('/'); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<small><?php bloginfo('description'); ?></small>
		<div class="h_right">
			<form method="get" action="<?php esc_url(home_url('/'))?>">
				<input type="" placeholder="Search..." name="search">
			</form>
		</div>
	</div>
</header>
<!-- NAVIGATION -->
<nav class="nav main-nav">
	<div class="container">
		<?php

		$args = array(
			'theme_location' => 'primary'
		)
		?>

		<?php wp_nav_menu($args); ?>
		
	</div>
</nav>