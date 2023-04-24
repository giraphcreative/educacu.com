<?php


function is_slide_live( $start, $stop ) {

	//if ( !empty( $start ) ) $start = intval( $start ) + ( get_option('gmt_offset') * 3600 );
	//if ( !empty( $stop ) ) $stop = intval( $stop ) + ( get_option('gmt_offset') * 3600 );

	// get the current time	
	$current_time = date( 'U' ) + ( get_option('gmt_offset') * 3600 );

	// if no start or stop was specified, the slide shows
	if ( empty( $start ) && empty( $stop ) ) {
		return true;
	}

	// if we have a start time and no end time, and we're past the start time
	if ( !empty( $start ) && $current_time >= $start && empty( $stop ) ) {
		return true;
	}

	// if we have no start and do have a stop, show if before stop time
	if ( empty( $start) && !empty( $stop ) && $current_time <= $stop ) {
		return true;
	}

	// if we have both start and stop, make sure the current time is between them
	if ( !empty( $start ) && !empty( $stop ) && $current_time >= $start && $current_time <= $stop ) {
		return true;
	}

	// otherwise we're not showing the slide
	return false;
}


function the_showcase() {

	// get the slides
	$slides = get_post_meta( get_the_ID(), CMB_PREFIX . "showcase", 1 );

	if ( !empty( $slides ) ) {
		?>
		<div class="showcase">
		<?php
		$count = 0;
		foreach ( $slides as $key => $slide ) {
			if ( !empty( $slide["image"] ) ) {

				// store the title and subtitle
				$title = ( isset( $slide["title"] ) ? $slide["title"] : '' );
				$subtitle = ( isset( $slide["subtitle"] ) ? $slide["subtitle"] : '' );
				$link = ( isset( $slide["link"] ) ? $slide["link"] : '' );
				$alt = ( isset( $slide['alt-text'] ) ? $slide["alt-text"] : "Link to " . $link );
				$start = ( isset( $slide['schedule-start'] ) ? $slide["schedule-start"] : "" );
				$stop  = ( isset( $slide['schedule-stop'] ) ? $slide["schedule-stop"] : "" );


				// check if it's an image or video
				if ( p_is_image( $slide["image"] ) ) {
					// it's an image, so resize it and generate an img tag.
					$image = '<img src="' . $slide["image"] . '" alt="' . $alt . '">';
				} else {
					// it's a video, so oEmbed that stuffs, yo
					$image = apply_filter( 'the_content', $slide["image"] );
				}

				// if the slide is scheduled to be live
				if ( is_slide_live( $start, $stop ) ) {
				?>
			<div class="slide<?php print ( $count == 0 ? ' visible' : '' ); ?>">
				<?php if ( !empty( $link ) ) { ?><a href="<?php print $link ?>" class="<?php print ( stristr( $link, 'vimeo' ) || stristr( $link, 'youtube' ) || stristr( $link, 'google.com/maps' ) ? 'lightbox-iframe' : '' ) ?>"><?php } ?>
				<?php print $image; ?>
				<?php if ( !empty( $link ) ) { ?></a><?php } ?>
				
				<?php if ( !empty( $title ) || !empty( $subtitle ) ) { ?>
				<div class="slide-content">
					<?php if ( !empty( $title ) ) { ?><h1><?php print $title; ?></h1><?php } ?>
					<?php if ( !empty( $subtitle ) ) { ?><h2><?php print $subtitle; ?></h2><?php } ?>
				</div>
				<?php } ?>
			</div>
				<?php
				$count++;
				}
			}
		}

		if ( $count > 1 ) { 
			?>
			<div class="showcase-nav">
				<a class="previous" role="button" tabindex="0">Previous</a>
				<a class="next" role="button" tabindex="0">Next</a>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
}



?>