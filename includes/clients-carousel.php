<?php
$args = array(
    'post_type' => 'clients_logo',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<div id="clients-carousel" class="owl-carousel owl-theme clients-carousel">

    <?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <div class="clients-logo-container">
                <div class="client-logo-img-container">
                    <img src="<?php get_field('client_logo'); ?>" alt="" srcset="">
                </div>
            </div>



        <?php endwhile; ?>
    <?php endif; ?>
</div>






<?php wp_reset_postdata(); ?>