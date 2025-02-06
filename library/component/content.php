<?php


$content = get_sub_field('content');
$style = get_sub_field('style');
if ( !empty( $content ) ){
    ?>
<div class="content-area <?php print $style; ?>">
    <?php print $content ?>
</div>
    <?php
}

