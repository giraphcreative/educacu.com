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
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=20" rel="stylesheet" type="text/css">

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97213155-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-97213155-1');
</script>

<?php if ( is_page( 1817 ) ) { ?>
<script>!function(s,a,e,v,n,t,z){if(s.saq)return;n=s.saq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!s._saq)s._saq=n;n.push=n;n.loaded=!0;n.version='1.0';n.queue=[];t=a.createElement(e);t.async=!0;t.src=v;z=a.getElementsByTagName(e)[0];z.parentNode.insertBefore(t,z)}(window,document,'script','https://tags.srv.stackadapt.com/events.js');saq('ts', '-uBJHlL_WJGTGs9bmKqDxQ');</script>
<?php } ?>

<?php if ( is_page( 1847 ) ) { ?>
<script>!function(s,a,e,v,n,t,z){if(s.saq)return;n=s.saq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!s._saq)s._saq=n;n.push=n;n.loaded=!0;n.version='1.0';n.queue=[];t=a.createElement(e);t.async=!0;t.src=v;z=a.getElementsByTagName(e)[0];z.parentNode.insertBefore(t,z)}(window,document,'script','https://tags.srv.stackadapt.com/events.js');saq('conv','rqcF9KEMkNzudeaaESmQan');</script>
<?php } ?>

</head>
<body <?php body_class(); ?>>

<?php if ( is_page( 1847 ) ) { ?>
<noscript><img src="https://tags.srv.stackadapt.com/conv?cid=rqcF9KEMkNzudeaaESmQan" width="1" height="1" alt="" role="presentation" /></noscript>
<?php } ?>

<?php the_emergency_bar(); ?>

<div class="container">

<header>

	<div class="wrap">
	
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1><img src="<?php bloginfo( "template_url" ) ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></h1>
			</a>
		</div>
		
		<?php
		$time = time();
		if ( $time < 1696014000 ) {
			// current
			?>
			<a href="https://gbs.onlinecu.com/tpscu/#/" class="banking-link" target="_blank"><div class='banking'>
				<h2>HOME BANKING</h2>
				<p>Click here to access your account info 24/7 with Home Banking.  Transfer funds, check balances, setup alerts, and more. Enroll in Home Banking today!</p>
			</div></a>
			<?php
		} else if ( $time >= 1696251600 ) {
			// monday
			?>
			<a href="https://www.itsme247.com/363/authentication/username" class="banking-link" target="_blank"><div class='banking'>
				<h2>HOME BANKING</h2>
				<p>Click here to access your account info 24/7 with Home Banking.  Transfer funds, check balances, setup alerts, and more. Enroll in Home Banking today!</p>
			</div></a>
			<?php
		} else {
			// maintenance
			?>
			<div class='banking maintenance'>
				<h2>HOME BANKING MAINTENANCE</h2>
				<p>Online banking is currently undergoing maintenance until Monday at 9am. Sorry for the inconvenience.</p>
			</div>
			<?php
		}
		?>

		
		<a href="/story/contact/">
			<div class="contact">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-contact.png" class="contact-icon" alt="Contact us for assistance with any questions you may have.">
				Have a question? <strong>Contact us to learn more!</strong>
			</div>
		</a>
	</div>

	<nav role="navigation">
		<button class="menu-toggle"><i class="fa fa-bars">Show/hide Menu</i></button>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>
	
</header>

<section class="content">
	<div class="search-form">
		<?php get_search_form(); ?>
	</div>
	<a name="content"></a>
