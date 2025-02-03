<?php


function is_active_date( $start, $stop ) {

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


function the_emergency_bar() {

	// narrow content
    $emergency_text = get_post_meta( get_the_ID(), CMB_PREFIX . "emergency-text", 1 );
    $emergency_link = get_post_meta( get_the_ID(), CMB_PREFIX . "emergency-link", 1 );
    $emergency_color = get_post_meta( get_the_ID(), CMB_PREFIX . "emergency-color", 1 );
    $start = get_post_meta( get_the_ID(), "schedule-start", 1 );
    $stop = get_post_meta( get_the_ID(), "schedule-stop", 1 );

	// if it's active according to dates, display it
	if ( is_active_date( $start, $stop ) ) {

		if ( !empty( $emergency_text ) ) {
			?>
		<div class="emergency-bar-container <?php print $emergency_color; ?> <?php print md5( $emergency_text ); ?>">
			<div class="wrap">
				<i class="fa fa-close">X</i>
				<?php if ( !empty( $emergency_link ) ) { ?><a href="<?php print $emergency_link ?>"><?php } ?>
				<div class="emergency-bar-text">
					<?php print do_shortcode( $emergency_text ) ?>
				</div>
				<?php if ( !empty( $emergency_link ) ) { ?></a><?php } ?>
			</div>
		</div>
			<?php
		}
		
	}

}

