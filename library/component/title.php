<?php

$title = get_sub_field( 'title' );
if ( !empty( $title ) ) print '<h1 class="post-title">' . $title . '</h1>';
