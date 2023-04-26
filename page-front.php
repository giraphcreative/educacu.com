<?php

/*
Template Name: Homepage
 */

get_header();

the_showcase(); 

the_icon_showcase(); 

the_boxes();

the_footer_image(); 

?>
<div class="home-content">
	<img src="<?php bloginfo( 'template_url' ) ?>/img/title-home-video.jpg" alt="Live and Continue to Learn" class="home-title" />
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
		if( '' !== get_post()->post_content ) { ?>
		<div class="content-wide" role="main">
			<?php if ( get_cmb_value( 'layout-title-hide' ) != 'on' ) { ?><h1 class="post-title"><?php the_title(); ?></h1><?php }
			the_content();
			?>
		</div><!-- #content -->
		<?php
		}
	endwhile;
endif;
?>
	<img src="<?php bloginfo( 'template_url' ) ?>/img/pencil.png" role="presentation" alt="" class="home-pencil" />
</div>
<?php

get_footer();

