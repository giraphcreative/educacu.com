<?php
/*
Home/catch-all template
*/

get_header(); ?>


	<div class="content-wide" role="main">

		<?php
		if ( is_search() ) {
			?><h1 class="post-title">Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1 class="post-title">Our Blog</h1><?php
		}
		
		?>
		<div class="articles">
		<?php 
		if ( have_posts() ) : 

			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				?>
		<div class="entry third">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { ?><div class="post-thumbnail-container"><?php the_post_thumbnail(); ?></div><?php } ?>
			<h4><?php print get_the_title(); ?></h4></a>
			<?php the_excerpt(); ?>
		</div>
		<?php 
		?>
				<?php
			endwhile;

		else :

			print "<p>There are currently no posts to list here.</p>";

		endif;
		?>
		</div>
		
		<?php pagination(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>