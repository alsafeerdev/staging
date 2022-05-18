

<?php

$terms = get_terms( 'portfolio_category' );

echo '<div class="row">';

foreach ( $terms as $term ) {

    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link( $term );

    // If there was an error, continue to the next term.
    if ( is_wp_error( $term_link ) ) {
        continue;
    }

    // We successfully got a link. Print it out.
    echo '<div class="col-lg-3"><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></div>';
}

echo '</div>';

?>