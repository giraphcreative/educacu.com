<?php

if ( have_rows('video') ): 
    ?>
<div class="videos-container">
    <?php
    // loop through the rows of data
    $num = 1;
    while ( have_rows( 'video' ) ) : the_row();
        $title = get_sub_field( 'title' );
        ?>
    <div class="video">
        <?php the_sub_field('video'); ?>
        <?php if ( !empty( $title ) ) { print '<p class="video-title">' . $title . '</p>'; } ?>
    </div>
        <?php
    endwhile;
    ?>
</div>
<?php
endif;

