<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'taxonomy' => 'product_categories',
    'order'   => 'ASC'
) );

foreach( $categories as $category ) {
 echo '<div class="category-list"><a href="' . get_category_link($category->term_id) . '"> > ' . $category->name . ' (' . $category->count . ')</a></div>';   
} 
?>

