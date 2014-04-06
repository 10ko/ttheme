<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<script type="text/javascript" src="//use.typekit.net/yal5vem.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="row" id="wrapper" class="hfeed">
<header id="header" role="banner" class="columns small-centered small-6">
	<nav id="menu" role="navigation" class="row">
		<div id="site-title" class="columns small-6"><span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></div>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'columns small-6' ) ); ?>
		<div class="clear"></div>
	</nav>
</header>
<div class="row" id="container">