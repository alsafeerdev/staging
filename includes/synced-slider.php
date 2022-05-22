<?php
$args = array(
    'post_type' => 'portfolio_items',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<div class="main-image-carousel">

    <?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>

            <?php the_title() ?>


        <?php endwhile; ?>
    <?php endif; ?>

</div>



<?php wp_reset_postdata(); ?>