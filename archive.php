<?php
/**
 * The template for displaying Archive pages
 */

get_header(); 

?>

	<div class="content-wide" role="main">

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
	</div><!-- #primary -->

	<?php pagination(); ?>

<?php

get_footer();

?>