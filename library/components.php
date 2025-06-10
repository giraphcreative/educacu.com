<?php


// function loops through the components and includes the template parts for it.
function the_components() {

    // if we have components for this page
    if( have_rows('components') ) :

        // loop through the components
        while ( have_rows('components') ) : the_row();

            // include the template for this row layout
            get_template_part( 'library/component/' . get_row_layout() );

        endwhile;

    endif;

}


function have_components() {
    if ( have_rows('components') ) :
        return true;
    endif;
    return false;
}