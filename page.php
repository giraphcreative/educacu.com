<?php

get_header();

the_showcase(); 

the_icon_showcase(); 
	
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

the_boxes();

the_footer_image(); 

get_footer();

