<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> Educational Community Alliance CU</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=6" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>

<?php the_emergency_bar(); ?>

<div class="container">

<header>

	<div class="wrap">
	
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( "template_url" ) ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>
		
		<div class='banking'>
			<form action="https://www.shareteccu.com/tpscu" method="post" _lpchecked="1">
                <input type="text" name="login" autocomplete="off">
                <input type="image" name="submit" src="<?php bloginfo( 'template_url' ) ?>/img/icon-banking.png" value="Go">
            </form>
			<h3>HOME BANKING</h3>
			<p>Access your account info 24/7 with Home Banking.  Transfer funds, check balances, setup alerts, and more. Enroll in Home Banking today!</p>
		</div>
		
		<div class="contact">
			<a href="/contact"><img src="<?php bloginfo( 'template_url' ) ?>/img/icon-contact.png" class="contact-icon"></a>
			Have a question? <strong>Contact us to learn more!</strong>
		</div>
	</div>

	<nav role="navigation">
		<button class="menu-toggle"><i class="fa fa-bars">Show/hide Menu</i></button>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>
	
</header>

<section class="content">
	<div class="search">
		<?php get_search_form(); ?>
	</div>
	<a name="content"></a>
