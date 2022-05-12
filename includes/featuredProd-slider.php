<?php
$args = array(
    'post_type' => 'featured_products',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>


<div id="featured-products-carousel" class="featured-product-carousel">

<?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>

<?php the_title( ) ?>

     <?php endwhile; ?>
    <?php endif; ?>
</div>