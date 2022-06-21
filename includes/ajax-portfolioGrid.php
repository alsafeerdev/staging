<?php

$terms = get_terms('portfolio_category');


echo '<div class="container catergory-grid">';
echo   ' <div class="row">';
foreach ($terms as $term) {

    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link($term);


    $thumbnail = get_field('featured_image', $term->taxonomy . '_' . $term->term_id);

    // If there was an error, continue to the next term.
    if (is_wp_error($term_link)) {
        continue;
    }

    echo    '   <div class="col-lg-4 col-sm-6 mb-4 portfolio-catergory-grid-item-container"> 
  <a href="' . $term_link . ' " class="portfolio-catergory-grid-wrapper-link">
           
  <div class="portfolio-catergory-grid-content-wrapper">
  <div class="portfolio-catergory-grid-img-container">
      <img class="portfolio-catergory-grid-img" data-blink-src="' . $thumbnail .'" alt="" srcset="">
  </div>
  <div class="portfolio-catergory-grid-title-container">
      <h3 class="portfolio-catergory-grid">' . $term->name . '</h3>
  </div>
</div>
<div class="portfolio-catergory-grid-container-overlay">
  
</div>
               
                </a>
            </div>';
}

echo '    </div>';
echo '</div>';

?>

<?php 

// load thumbnail for this taxonomy term


?>