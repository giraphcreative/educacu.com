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
			if ( have_rows( 'links' ) ) :
				?><div class="quick-links"><?php
				while ( have_rows( 'links' ) ) : the_row();
					$image = get_sub_field( 'image' );
					$link = get_sub_field( 'link' );
					?><div class="link"><a href="<?php print $link; ?>"><img src="<?php print $image ?>" /></div><?php
				endwhile;
				?></div><?php
			endif;
			?>
		</div><!-- #content -->
		<?php
		}
	endwhile;
endif;


the_boxes();

the_footer_image(); 

get_footer();

