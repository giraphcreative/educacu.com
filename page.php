<?php

get_header();

?>

	<?php the_showcase(); ?>
	
	<?php the_icon_showcase(); ?>

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

	<?php the_boxes(); ?>

	<?php the_footer_image(); ?>

<?php

get_footer();

?>