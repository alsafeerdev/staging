<?php

$terms = get_terms( 'industrygroups' );


echo '<div class="container catergory-grid">';
echo   ' <div class="row">';
foreach ( $terms as $term ) {

    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link( $term );

    // If there was an error, continue to the next term.
    if ( is_wp_error( $term_link ) ) {
        continue;
    }

  echo    '   <a href="' . $term_link .' " class="wrapper-link">
            <div class="col-lg-4 portfolio-catergory-grid-item-container">
                <div class="portfolio-catergory-grid-img-container">
                    <img src="/wp-content/uploads/2022/04/Customized-USB-Featured-IMG.jpg" alt="" srcset="">
                </div>
                <h3 class="portfolio-catergory-grid">' . php $term->name . '</h3>
            </div>
        </a>';

    // We successfully got a link. Print it out.
    echo '<div class="col-lg-3"><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></div>';
}

echo '    </div>';
echo '</div>';

?>

