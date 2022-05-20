<?php
$args = array(
    'post_type' => 'clients_logo',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<?php if ($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) :
        $loop->the_post(); ?>
        <div class="clients-logo-container">
            <div class="client-logo-img-container">
                <p><?php the_title(); ?></p>

            </div>
        </div>




    <?php endwhile; ?>
<?php endif; ?>






<?php wp_reset_postdata(); ?>