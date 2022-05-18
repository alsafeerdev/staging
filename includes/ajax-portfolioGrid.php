<?php

$terms = get_terms( 'portfolio_category' );


echo '<div class="container catergory-grid">';
echo   ' <div class="row">';
foreach ( $terms as $term ) {

    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link( $term );

    // If there was an error, continue to the next term.
    if ( is_wp_error( $term_link ) ) {
        continue;
    }

  echo    '   <div class="col-lg-4 mb-4 portfolio-catergory-grid-item-container"> 
  <a href="' . $term_link .' " class="portfolio-catergory-grid-wrapper-link">
           
                <div class="portfolio-catergory-grid-img-container">
                    <img class="portfolio-catergory-grid-img" src="/wp-content/uploads/2022/04/Customized-USB-Featured-IMG.jpg" alt="" srcset="">
                </div>
<div class="portfolio-catergory-grid-title-container">
 <h3 class="portfolio-catergory-grid">' . $term->name . '</h3>
</div>

               
                </a>
            </div>'
        ;

}

echo '    </div>';
echo '</div>';

?>

