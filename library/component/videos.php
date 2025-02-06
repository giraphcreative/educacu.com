<?php

if ( have_rows('video') ): 
    ?>
<div class="videos-container">
    <?php
    // loop through the rows of data
    $num = 1;
    while ( have_rows( 'video' ) ) : the_row();
        ?>
    <div class="video">
        <?php the_sub_field('video'); ?>
    </div>
        <?php
    endwhile;
    ?>
</div>
<?php
endif;

