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
			if ( '' !== get_post()->post_content ) { ?>
	<div class="content-wide" role="main">
		<?php if ( get_cmb_value( 'layout-title-hide' ) != 'on' ) { ?><h1 class="post-title"><?php the_title(); ?></h1><?php }
		the_content();
		?>
	</div><!-- #content -->
			<?php
			}
		endwhile;
	endif;


	$articles = new WP_Query( array( 'posts_per_page' => 3 ) );
	if ( $articles->have_posts() ) :
		?>
	<div class="articles home">
		<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
		<div class="entry third">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { ?><div class="post-thumbnail-container"><?php the_post_thumbnail(); ?></div><?php } ?>
			<h4><?php print get_the_title(); ?></h4></a>
			<?php the_excerpt(); ?>
		</div>
		<?php 
		endwhile;
		wp_reset_postdata(); 
		?>

		<div class="button">
			<a href="/blog" class="btn">More Articles</a>
		</div>
	</div>
	<?php endif; ?>
	<img src="<?php bloginfo( 'template_url' ) ?>/img/pencil.png" role="presentation" alt="" class="home-pencil" />
</div>
<?php

get_footer();

